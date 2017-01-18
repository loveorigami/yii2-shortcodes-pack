<?php
namespace lo\shortcodes\bootstrap\widgets;

use yii\bootstrap\Html;

/**
 * Class Row
 * @package lo\shortcodes\bootstrap\widgets
 * @author Lukyanov Andrey <loveorigami@mail.ru>
 */
class Row extends BootstrapWidget
{
    /**
     * @var string
     */
    public $id;

    /**
     * init widget
     */
    public function init()
    {
        parent::init();

        $this->options = [
            'id' => $this->id,
            'class' => 'row'
        ];

        $this->xclass ? Html::addCssClass($this->options, $this->xclass) : null;
    }

    /**
     * Render row
     * @return string
     */
    public function run()
    {
        return Html::tag('div', $this->content, $this->options);
    }
}