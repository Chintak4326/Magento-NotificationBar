<?php

namespace ChintakExtensions\PromotionBar\Model\Config\Source;

use Magento\Framework\Option\ArrayInterface;

class SliderOnOff implements ArrayInterface
{
    public function toOptionArray()
    {
        return [
            ['value' => 'on', 'label' => __('On')],
            ['value' => 'off', 'label' => __('Off')]
        ];
    }
}