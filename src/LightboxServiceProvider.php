<?php

namespace Ezadev\Grid\Lightbox;

use Ezadev\Admin\Admin;
use Ezadev\Admin\Grid\Column;
use Illuminate\Support\ServiceProvider;

class LightboxServiceProvider extends ServiceProvider
{
    public function boot(Lightbox $extension)
    {
        if (! Lightbox::boot()) {
            return ;
        }

        if ($this->app->runningInConsole() && $assets = $extension->assets()) {
            $this->publishes(
                [$assets => public_path('vendor/ezadev-admin/grid-lightbox')],
                'ezadev-lightbox'
            );
        }

        Admin::booting(function () {

            Admin::css('vendor/ezadev-admin/grid-lightbox/magnific-popup.css');
            Admin::js('vendor/ezadev-admin/grid-lightbox/jquery.magnific-popup.min.js');

            Column::extend('lightbox', LightboxDisplayer::class);
            Column::extend('gallery', GalleryDisplayer::class);
        });
    }
}