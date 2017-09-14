<?php

namespace lo\shortcodes\bootstrap\widgets;

use lo\plugins\helpers\ShortcodesHelper;
use yii\helpers\ArrayHelper;

/**
 * Class Collapse
 * @package lo\shortcodes\bootstrap\widgets
 * @author Lukyanov Andrey <loveorigami@mail.ru>
 */
class Collapse extends BootstrapWidget
{
    /**
     * @var array
     */
    protected $items;

    /**
     * @return string
     */
    public function run()
    {
        CollapseAsset::register($this->getView());
        $this->getItemsFromContent();
        return BootstrapCollapse::widget([
            'items' => $this->items,
            'options' => $this->options,
        ]);
    }

    /**
     * populate $items
     */
    protected function getItemsFromContent()
    {
        $pattern = ShortcodesHelper::shortcodeRegex('panel');
        preg_replace_callback($pattern, [$this, 'doShortcodeTag'], $this->content);
    }

    /**
     * @param $m
     */
    protected function doShortcodeTag($m)
    {
        $tag = $m[2];
        $attr = ShortcodesHelper::parseAttributes($m[3]);
        $content = isset($m[5]) ? $m[5] : null;

        $index = count($this->items);

        $this->items[$index] = [
            'content' => $content,
            'label' => ArrayHelper::getValue($attr, 'title', $tag . '-' . $index),
            'headerOptions' => [
                'class' => 'collapsed'
            ],
            'contentOptions' => [
                'class' => ArrayHelper::getValue($attr, 'active') ? 'in' : ''
            ]
        ];
    }
}