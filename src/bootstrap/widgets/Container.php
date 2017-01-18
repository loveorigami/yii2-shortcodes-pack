<?php
namespace lo\shortcodes\bootstrap\widgets;

/**
 * Class Container
 * @package lo\shortcodes\bootstrap\widgets
 * @author Lukyanov Andrey <loveorigami@mail.ru>
 */
class Container extends BootstrapWidget
{
    /** @var bool */
    public $fluid;

    /**
     * init widget
     */
    public function init()
    {
        $this->options = [
            'class' => $this->fluid ? 'container-fluid' : 'container'
        ];
        parent::init();
    }
}