<?php
namespace lo\shortcodes\web\youtube;

use lo\plugins\BaseShortcode;
use yii\helpers\Html;

/**
 * Plugin Name: Youtube Video
 * Plugin URI: https://github.com/loveorigami/yii2-shortcodes-pack/tree/master/src/web/youtube
 * Version: 1.7
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
                    'controls' => 1,
                    'pull' => 'right',
                    'ratio' => '16:9'
                ],
                'tooltip' => '[youtube code=* w=* h=* ratio=16:9 pull=left]'
            ]
        ];
    }
}

