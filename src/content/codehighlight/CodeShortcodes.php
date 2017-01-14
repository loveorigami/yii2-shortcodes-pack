<?php
namespace lo\shortcodes\content\codehighlight;

use lo\plugins\BaseShortcode;

/**
 * Plugin Name: Code Highlighting
 * Plugin URI: https://github.com/loveorigami/yii2-shortcodes-pack/tree/master/src/content/codehighlight
 * Version: 1.12
 * Description: A shortcode for code highlighting in view. Use as [code lang="php"]...content...[/code]
 * Author: Andrey Lukyanov
 * Author URI: https://github.com/loveorigami
 */
class CodeShortcodes extends BaseShortcode
{
    /**
     * @return array
     */
    public static function shortcodes()
    {
        return [
            'code' => [
                'callback' => [CodeWidget::class, 'widget'],
                'tooltip' => '[code style="*" lang="*"] ... [/code]',
                'config' => [
                    'style' => 'github',
                    'lang' => 'php'
                ]
            ],
        ];
    }
}