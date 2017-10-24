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
    const PULL_LEFT = 'left';
    const PULL_RIGHT = 'right';

    const RATIO_16_9 = '16:9';
    const RATIO_4_3 = '4:3';

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
     * @var string
     */
    public $ratio;

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

        if (!$this->ratio) {
            $this->ratio = self::RATIO_16_9;
        }

        $this->iframeOptions = [
            'frameborder' => 0,
            'allowfullscreen' => true,
            'class' => 'embed-responsive-item'
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
            'class' => 'embed-responsive embed-responsive-' . $this->cssRetio(),
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


        echo Html::beginTag('div', $this->pullOptions());

        echo Html::beginTag('div', $this->divOptions);
        echo Html::tag('iframe', '', $options);
        echo Html::endTag('div');
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

    /**
     * @return array
     */
    protected function pullOptions()
    {
        if ($this->w && $this->isPull()) {
            return [
                'class' => 'yt img-thumbnail pull-' . $this->pull,
                'style' => "width:{$this->w}px; heght:{$this->h}px;"
            ];
        } else {
            return [
                'class' => 'yt text-center',
            ];
        }
    }

    /**
     * @return bool
     */
    protected function isPull()
    {
        return in_array($this->pull, [self::PULL_RIGHT, self::PULL_LEFT]);
    }

    /**
     * @return string
     */
    protected function cssRetio()
    {
        if ($this->ratio == self::RATIO_4_3) {
            return '4by3';
        } else {
            return '16by9';
        }
    }
}