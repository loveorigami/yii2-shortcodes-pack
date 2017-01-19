# Create your shortcodes plugin

To create your plugin with shortcodes you need to run the following required steps

### 1. Create in dir with our shortcodes `@common\shortcodes` new folder:
* For example: `test`

### 2. In this folder create:
* `README.md` with usage instruction for this plugin
* New class `MyShortCodes`, with information about plugin

```php

use lo\plugins\BaseShortcode;

namespace common\shortcodes\test;

/**
 * Plugin Name: My easy shortcodes
 * Plugin URI:
 * Version: 1.0
 * Description: Small test plugin
 * Author: Andrey Lukyanov
 * Author URI: https://github.com/loveorigami
 */
 
class MyShortCodes extends BaseShortcode
{
...
}

```

* Add static property `$appId`

```php

    /**
     * Application id, where plugin will be worked.
     * @var appId integer
     */
    public static $appId = self::APP_FRONTEND;

```

* Then, assign a template shortcodes

```php
    public static function shortcodes()
    {
        return [
            $shortcode => $callback,
            // or
             $shortcode => [
                'callback' => $callback,
                'config' => $config,
                'tooltip' => 'tooltip for shortcode',
             ]
        ];
    }
```

for example:
```php
    /**
     * @return array
     */
    public static function shortcodes()
    {
        return [
            // show original link
            'yt' => function ($attrs, $content, $tag) {
                $title = $content ? $content : 'shortcode ' . $tag;
                if (isset($attrs['code'])) {
                    return Html::a($title, 'https://www.youtube.com/embed/' . $attrs['code'], ['target' => '_blank']);
                }
                return null;
            },
            // embed video
            'youtube' => [
                'callback' => [YoutubeWidget::class, 'widget'],
                'config' => [
                    'code' => 'ZM2tVuy8B_Y',
                    'w' => 560,
                    'h' => 315,
                    'controls' => 2
                ],
                'tooltip' => '[youtube code=* w=* h=*]'
            ]
        ];
    }
```

* For `$callback` with widget - create this widget with the necessary logic

* That's all. Then you have to install this plugin.