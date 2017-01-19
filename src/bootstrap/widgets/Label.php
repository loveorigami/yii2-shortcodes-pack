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
     * @var string
     */
    public $text;

    /**
     * init type
     */
    public function init()
    {
        $this->getCssClass();
        if ($this->text) {
            $this->content = $this->text;
        }
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