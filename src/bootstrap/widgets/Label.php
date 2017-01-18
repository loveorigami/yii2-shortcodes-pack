<?php
namespace lo\shortcodes\bootstrap\widgets;

use yii\bootstrap\Html;

/**
 * Class Alert
 * @package lo\shortcodes\bootstrap\widgets
 * @author Lukyanov Andrey <loveorigami@mail.ru>
 */
class Label extends BootstrapWidget
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

    /**
     * init type
     */
    public function init()
    {
        $this->getCssClass();
        parent::init();
    }

    /**
     * @return string
     */
    public function run()
    {
        return Html::label($this->content, '', $this->options);
    }

    /**
     * css label
     */
    protected function getCssClass()
    {
        $this->type ? Html::addCssClass($this->options, 'label label-' . $this->type) : null;
    }
}