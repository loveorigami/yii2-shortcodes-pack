<?php
namespace lo\shortcodes\web\youtube;

use lo\plugins\BaseShortcode;
use yii\helpers\Html;

/**
 * Plugin Name: Youtube Video
 * Plugin URI: https://github.com/loveorigami/yii2-shortcodes-pack/tree/master/src/web/youtube
 * Version: 1.3
 * Description: A shortcode for embed youtube video in view. Use as [youtube code="ZM2tVuy8B_Y"]
 * Author: Andrey Lukyanov
 * Author URI: https://github.com/loveorigami
 */
class YoutubeShortcodes extends BaseShortcode
{
    /**
     * @return array
     */
    public static function shortcodes()
    {
        return [
            // show original link
            'yt' => [
                'tooltip' => '[yt code="*"]...[/yt]',
                'config' => [
                    'code' => 'ZM2tVuy8B_Y',
                ],
                'callback' => function ($attrs, $content, $tag) {
                    $title = $content ? $content : 'shortcode ' . $tag;
                    return Html::a($title, 'https://www.youtube.com/embed/' . $attrs['code'], ['target' => '_blank']);
                },
            ],
            // embed video
            'youtube' => [
                'tooltip' => '[youtube code="*" w="*" h="*"]',
                'config' => [
                    'code' => 'ZM2tVuy8B_Y',
                    'w' => 560,
                    'h' => 315,
                    'controls' => 2
                ],
                'callback' => [YoutubeWidget::class, 'widget'],
            ]
        ];
    }
}

