<?php
namespace lo\shortcodes\bootstrap;

use lo\plugins\BaseShortcode;
use lo\shortcodes\bootstrap\widgets\Tabs;

/**
 * Plugin Name: Bootstrap 3 JavaScript Shortcodes
 * Plugin URI: https://github.com/loveorigami/yii2-shortcodes-pack/tree/master/src/bootstrap
 * Version: 1.1
 * Description: A shortcodes pack with Bootstrap 3 JavaScript
 * Author: Andrey Lukyanov
 * Author URI: https://github.com/loveorigami
 */
class BootstrapJsShortcodes extends BaseShortcode
{
    /**
     * @return array
     */
    public static function shortcodes()
    {
        return [
            'tabs' => [
                'callback' => [Tabs::class, 'widget'],
                'config' => [
                    'type' => 'tabs',
                    'xclass' => false
                ],
                'tooltip' => '[tabs][tab title="*"] ... [/tab][/tabs]'
            ],
        ];
    }
}

