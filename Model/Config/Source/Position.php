<?php

namespace ChintakExtensions\PromotionBar\Model\Config\Source;

use Magento\Framework\Option\ArrayInterface;

class Position implements ArrayInterface
{
    public function toOptionArray()
    {
        return [
            ['value' => 'header', 'label' => __('Header')],
            ['value' => 'footer', 'label' => __('Footer')]
        ];
    }
}