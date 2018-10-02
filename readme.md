# Yii2 Image Optimizer
A Yii2 helper for optimizing image using [spatie/image-optimizer](https://github.com/spatie/image-optimizer) library.

## Installation
1. Run the [Composer](http://getcomposer.org/download/) command to install the latest version:

```bash
composer require rollingglory/yii2-image-optimizer
```

## Usage
From here, you could either use it directly like this:

```php
\rollingglory\ImageOptimizer\Optimizer::optimize('@app/image.png');
```

And like this:
```php
use \rollingglory\ImageOptimizer\Optimizer;

Optimizer::optimize('@app/image.png');
```

Or, define it as Yii2 component. At your config:

```php
'components' => [
  'optimizer' => [
    'class' => 'rollingglory\ImageOptimizer\Optimizer',
  ],
],
```

Then use it like this:
```php
Yii::$app->optimizer::optimize('@app/image.png')
```