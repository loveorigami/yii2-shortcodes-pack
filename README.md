# Yii2-shortcodes-pack
[![Latest Stable Version](https://poser.pugx.org/loveorigami/yii2-shortcodes-pack/v/stable)](https://packagist.org/packages/loveorigami/yii2-shortcodes-pack) 
[![Total Downloads](https://poser.pugx.org/loveorigami/yii2-shortcodes-pack/downloads)](https://packagist.org/packages/loveorigami/yii2-shortcodes-pack)
[![License](https://poser.pugx.org/loveorigami/yii2-shortcodes-pack/license)](https://packagist.org/packages/loveorigami/yii2-shortcodes-pack)

Yii2-shortcodes-pack is part of the [Yii2-plugins-system](https://github.com/loveorigami/yii2-plugins-system) that have more usefull shortcodes for our site

!["Shortcodes"](docs/img/shortcodes.jpg)

## 0. Shortcodes in pack
Shortcode     | Usage                                 | Code 
------------- | ------------------------------------- | -------- 
yt	          | [yt code="*"] Link on video [/yt]     | [see](src/web/youtube)
youtube	      | [youtube code="*" w="*" h="*"]        | [see](src/web/youtube)
code	      | [code style="*" lang="*"] ... [/code] |	[see](src/content/codehighlight)
container     |	[container] ... [/container]	      | [see](src/bootstrap)
row	          | [row] ... [/row]	                  | [see](src/bootstrap)
col	          | [col md=6] ... [/col]                 | [see](src/bootstrap)
alert	      | [alert close=1] ... [/alert]          | [see](src/bootstrap)
label	      | [label text="*"]	                  | [see](src/bootstrap)
tabs	      | [tabs] [tab] ... [/tab] [/tabs]       | [see](src/bootstrap)

and more in future releases...

* * *

## 1. Download

Yii2-shortcodes-pack be installed using composer. Run following command to download and
install Yii2-shortcodes-pack:

```bash
composer require "loveorigami/yii2-shortcodes-pack": "*"
```

## 2. Configure application

Let's start with defining module in `@backend/config/main.php`:

```php
'modules' => [
    'plugins' => [
        'class' => 'lo\plugins\Module',
        'pluginsDir'=>[
            '@lo/plugins/core', // default dir with core plugins
			'@lo/shortcodes' // dir with shortcodes pack
            '@common/plugins', // dir with our plugins
        ]
    ],
],
```
That's all, now you have module installed and configured in advanced template.

Next, open `@frontend/config/main.php` and add following:

```php
...
'components' => [
    'plugins' => [
        'class' => lo\plugins\components\PluginsManager::class,
        'appId' => 1 // lo\plugins\BasePlugin::APP_FRONTEND,
        // by default
        'enablePlugins' => true,
        'shortcodesParse' => true,
        'shortcodesIgnoreBlocks' => [
            '<pre[^>]*>' => '<\/pre>',
            //'<div class="content[^>]*>' => '<\/div>',
        ]
    ],
    'view' => [
        'class' => lo\plugins\components\View::class,
    ]
    ...
]
```

Also do the same thing with `@backend/config/main.php`:

```php
...
'components' => [
    'plugins' => [
        'class' => lo\plugins\components\PluginsManager::class,
        'appId' => 2 // lo\plugins\BasePlugin::APP_BACKEND
    ],
    'view' => [
        'class' => lo\plugins\components\View::class,
    ]
    ...
]
```