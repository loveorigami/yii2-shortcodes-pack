<?php
namespace lo\shortcodes\bootstrap\widgets;

use yii\bootstrap\Html;

/**
 * Class Col
 * @package lo\shortcodes\bootstrap\widgets
 * @author Lukyanov Andrey <loveorigami@mail.ru>
 */
class Col extends BootstrapWidget
{
    /** @var string column width */
    public $lg = false;
    public $md = 12;
    public $sm = false;
    public $xs = false;

    /** @var string column offset */
    public $lg_offset = false;
    public $md_offset = false;
    public $sm_offset = false;
    public $xs_offset = false;

    /** @var string column pull */
    public $lg_pull = false;
    public $md_pull = 12;
    public $sm_pull = false;
    public $xs_pull = false;

    /** @var string column push */
    public $lg_push = false;
    public $md_push = 12;
    public $sm_push = false;
    public $xs_push = false;

    /**
     * init widget
     */
    public function init()
    {
        $this->getCssClass();
        parent::init();
    }

    /**
     * Genereate css class
     */
    protected function getCssClass()
    {
        $this->lg ? Html::addCssClass($this->options, 'col-lg-' . $this->lg) : null;
        $this->md ? Html::addCssClass($this->options, 'col-md-' . $this->md) : null;
        $this->sm ? Html::addCssClass($this->options, 'col-sm-' . $this->sm) : null;
        $this->xs ? Html::addCssClass($this->options, 'col-xs-' . $this->xs) : null;

        $this->lg_offset ? Html::addCssClass($this->options, 'col-lg-offset-' . $this->lg_offset) : null;
        $this->md_offset ? Html::addCssClass($this->options, 'col-md-offset-' . $this->md_offset) : null;
        $this->sm_offset ? Html::addCssClass($this->options, 'col-sm-offset-' . $this->sm_offset) : null;
        $this->xs_offset ? Html::addCssClass($this->options, 'col-xs-offset-' . $this->xs_offset) : null;

        $this->lg_pull ? Html::addCssClass($this->options, 'col-lg-pull-' . $this->lg_pull) : null;
        $this->md_pull ? Html::addCssClass($this->options, 'col-md-pull-' . $this->md_pull) : null;
        $this->sm_pull ? Html::addCssClass($this->options, 'col-sm-pull-' . $this->sm_pull) : null;
        $this->xs_pull ? Html::addCssClass($this->options, 'col-xs-pull-' . $this->xs_pull) : null;

        $this->lg_push ? Html::addCssClass($this->options, 'col-lg-push-' . $this->lg_push) : null;
        $this->md_push ? Html::addCssClass($this->options, 'col-md-push-' . $this->md_push) : null;
        $this->sm_push ? Html::addCssClass($this->options, 'col-sm-push-' . $this->sm_push) : null;
        $this->xs_push ? Html::addCssClass($this->options, 'col-xs-push-' . $this->xs_push) : null;

        $this->xclass ? Html::addCssClass($this->options, $this->xclass) : null;
    }
}