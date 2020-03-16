# ezadev-lightbox
Lightbox Extension For Ezadev

## Installation

```
composer require ezadev/lightbox
php artisan vendor:publish --tag=ezadev-lightbox
```
## Configurations

Open `config/admin.php`, add configurations that belong to this extension at `extensions` section.
```php

    'extensions' => [
        'grid-lightbox' => [
            'enable' => true,
        ]
    ]
```

## Usage

Use it in the grid:
```php
// simple lightbox
$grid->picture()->lightbox();

//gallery
$grid->picture()->gallery();

//zoom effect
$grid->picture()->lightbox(['zooming' => true]);
$grid->picture()->gallery(['zooming' => true]);

//width & height properties
$grid->picture()->lightbox(['width' => 50, 'height' => 50]);
$grid->picture()->gallery(['width' => 50, 'height' => 50]);

//img class properties
$grid->picture()->lightbox(['class' => 'rounded']);
$grid->picture()->gallery(['class' => ['circle', 'thumbnail']]);
```
