<?php

namespace lo\shortcodes\bootstrap\widgets;

use yii\web\AssetBundle;

/**
 * Class CollapseAsset
 * @package lo\shortcodes\bootstrap\widgets
 * @author Lukyanov Andrey <loveorigami@mail.ru>
 */
class CollapseAsset extends AssetBundle
{
    public $css = [
        'collapse.css',
    ];

    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset'
    ];

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->sourcePath = __DIR__ . "/assets";
        parent::init();
    }
}