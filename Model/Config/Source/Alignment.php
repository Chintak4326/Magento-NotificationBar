<?php
namespace ChintakExtensions\PromotionBar\Model\Config\Source;

class Alignment implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * Retrieve Custom Option array
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => 'center', 'label' => __('Center')],
            ['value' => 'left', 'label' => __('Left')],
            ['value' => 'right', 'label' => __('Right')]
        ];
    }
}