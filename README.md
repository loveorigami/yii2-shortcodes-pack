# Yii2-shortcodes-pack
[![Latest Stable Version](https://poser.pugx.org/loveorigami/yii2-shortcode-pack/v/stable)](https://packagist.org/packages/loveorigami/yii2-shortcode-pack) 
[![Total Downloads](https://poser.pugx.org/loveorigami/yii2-shortcode-pack/downloads)](https://packagist.org/packages/loveorigami/yii2-shortcode-pack)
[![License](https://poser.pugx.org/loveorigami/yii2-shortcode-pack/license)](https://packagist.org/packages/loveorigami/yii2-shortcode-pack)

Yii2-shortcodes-pack is part of the [Yii2-plugins-system](https://github.com/loveorigami/yii2-plugins-system) that have more usefull shortcodes for our site

## 1. Download

Yii2-shortcodes-pack be installed using composer. Run following command to download and
install Yii2-shortcodes-pack:

```bash
composer require "loveorigami/yii2-shortcodes-pack": "*"
```

### 3. Configure application

Let's start with defining module in `@backend/config/main.php`:

```php
'modules' => [
    'plugins' => [
        'class' => 'lo\plugins\Module',
        'pluginsDir'=>[
            '@lo/plugins/plugins', // default dir with core plugins
			'@lo/shortcodes' // dir with shortcodes pack
            '@common/plugins', // dir with our plugins
        ]
    ],
],
```
That's all, now you have module installed and configured in advanced template.

Next, open `@frontend/config/main.php` and add following:

```
'bootstrap' => ['log', 'plugins'],
...
'components' => [
    'plugins' => [
        'class' => lo\plugins\components\EventBootstrap::class,
        'appId' => 1 // lo\plugins\BasePlugin::APP_FRONTEND
    ],
    'view' => [
        'class' => lo\plugins\components\View::class,
    ]
    ...
]
```

Also do the same thing with `@backend/config/main.php`:

```
'bootstrap' => ['log', 'plugins'],
...
'components' => [
    'plugins' => [
        'class' => lo\plugins\components\EventBootstrap::class,
        'appId' => 2 // lo\plugins\BasePlugin::APP_BACKEND
    ],
    'view' => [
        'class' => lo\plugins\components\View::class,
    ]
    ...
]
```