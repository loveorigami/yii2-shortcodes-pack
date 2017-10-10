<?php

namespace lo\shortcodes\web\youtube;

use lo\plugins\shortcodes\ShortcodeWidget;
use yii\helpers\Html;

/**
 * Class YoutubeWidget
 * @package lo\plugins\shortcodes
 * @author Lukyanov Andrey <loveorigami@mail.ru>
 */
class YoutubeWidget extends ShortcodeWidget
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $w;

    /**
     * @var string
     */
    public $h;

    /**
     * @var string
     */
    public $pull = 'right';

    /**
     * @var string
     */
    public $controls = 1;

    /**
     * @var string url pattern for video content
     */
    protected $embedPattern = 'https://www.youtube.com/embed/{video_id}';

    /**
     * @var array
     */
    protected $playerParameters;

    /**
     * @var array
     */
    protected $iframeOptions;

    /**
     * @var array
     */
    protected $divOptions;

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        $this->iframeOptions = [
            'width' => $this->w,
            'height' => $this->h,
            'frameborder' => 0,
            'allowfullscreen' => true
        ];

        if ($this->controls) {
            $this->playerParameters = [
                'rel' => 0,
                'modestbranding' => 1,
                'autohide' => 1,
                'controls' => $this->controls,
            ];
        };

        $this->divOptions = [
            'class' => 'yt img-thumbnail pull-' . $this->pull,
        ];

        $this->registerCss();
    }

    public function run()
    {
        $url = str_replace('{video_id}', $this->code, $this->embedPattern);
        if (!empty($this->playerParameters)) {
            $url .= '?' . http_build_query($this->playerParameters);
        }
        $options = array_merge(['src' => $url], $this->iframeOptions);

        echo Html::beginTag('div', $this->divOptions);
        echo Html::tag('iframe', '', $options);
        echo Html::endTag('div');
    }

    protected function registerCss()
    {
        $view = $this->getView();
        $css = <<<CSS
.yt.pull-left {
    margin-right:15px;
}
.yt.pull-right {
    margin-left:15px;
}
CSS;

        $view->registerCss($css);
    }
}