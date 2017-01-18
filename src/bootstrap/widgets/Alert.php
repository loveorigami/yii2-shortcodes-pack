<?php
namespace lo\shortcodes\bootstrap\widgets;

use yii\bootstrap\Html;
use yii\bootstrap\Alert as BootstrapAlert;

/**
 * Class Alert
 * @package lo\shortcodes\bootstrap\widgets
 * @author Lukyanov Andrey <loveorigami@mail.ru>
 */
class Alert extends BootstrapWidget
{
    /**
     * @var string
     */
    public $type;

    /**
     * Build on any alert by adding an optional .alert-dismissible and close button.
     * @var string
     */
    public $dismissable;

    public function init()
    {
        $this->getCssClass();
        parent::init();
    }

    /**
     * adding an optional .alert-dismissible
     */
    public function run()
    {
        return BootstrapAlert::widget([
            'options' => $this->options,
            'body' => $this->content,
            'closeButton' => $this->dismissable ? [] : false
        ]);
    }

    /**
     * css alerts
     */
    protected function getCssClass()
    {
        $this->type ? Html::addCssClass($this->options, 'alert alert-' . $this->type) : null;
    }
}