<?php
namespace lo\shortcodes\content\codehighlight;

use lo\plugins\BaseShortcode;

/**
 * Plugin Name: Code Highlighting
 * Plugin URI: https://github.com/loveorigami/yii2-shortcodes-pack/tree/master/src/content/codehighlight
 * Version: 1.11
 * Description: A shortcode for code highlighting in view. Use as [code lang="php"]...content...[/code]
 * Author: Andrey Lukyanov
 * Author URI: https://github.com/loveorigami
 */
class Code extends BaseShortcode
{
    /**
     * Default configuration for plugin.
     * @var  array $config
     */
    public static $config = [
        'style' => 'github',
        'lang' => 'php'
    ];

    /**
     * @return array
     */
    public static function shortcodes()
    {
        return [
            'code' => [CodeWidget::class, 'widget'],
        ];
    }
}