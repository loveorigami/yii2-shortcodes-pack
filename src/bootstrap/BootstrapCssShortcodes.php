<?php
namespace lo\shortcodes\bootstrap;

use lo\plugins\BaseShortcode;
use lo\shortcodes\bootstrap\widgets\Col;
use lo\shortcodes\bootstrap\widgets\Container;
use lo\shortcodes\bootstrap\widgets\Row;

/**
 * Plugin Name: Bootstrap 3 Css Shortcodes
 * Plugin URI: https://github.com/loveorigami/yii2-shortcodes-pack/tree/master/src/bootstrap
 * Version: 1.2
 * Description: A shortcodes pack with Bootstrap 3 css elements
 * Author: Andrey Lukyanov
 * Author URI: https://github.com/loveorigami
 */
class BootstrapCssShortcodes extends BaseShortcode
{
    /**
     * @return array
     */
    public static function shortcodes()
    {
        return [
            // Grid system
            'container' => [
                'callback' => [Container::class, 'widget'],
                'config' => [
                    'xlass' => false,
                    'fluid' => false
                ],
                'tooltip' => '[container] ... [/container]'
            ],
            'row' => [
                'callback' => [Row::class, 'widget'],
                'config' => [
                    'xlass' => false,
                ],
                'tooltip' => '[row] ... [/row]'
            ],
            'col' => [
                'callback' => [Col::class, 'widget'],
                'config' => [
                    "lg" => false,
                    "md" => 12,
                    "sm" => false,
                    "xs" => false,
                    "lg_offset" => false,
                    "md_offset" => false,
                    "sm_offset" => false,
                    "xs_offset" => false,
                    "lg_pull" => false,
                    "md_pull" => false,
                    "sm_pull" => false,
                    "xs_pull" => false,
                    "lg_push" => false,
                    "md_push" => false,
                    "sm_push" => false,
                    "xs_push" => false,
                    "xclass" => false
                ],
                'tooltip' => '[col md=6] ... [/col]'
            ],
        ];
    }
}

