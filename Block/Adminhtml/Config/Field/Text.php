<?php

namespace ChintakExtensions\PromotionBar\Block\Adminhtml\Config\Field;

use Magento\Config\Block\System\Config\Form\Field\FieldArray\AbstractFieldArray;

/**
 * Class Text
 *
 * @package Mageplaza\LazyLoading\Block\Adminhtml\Config\Field
 */
class Text extends AbstractFieldArray
{
    /**
     * @inheritdoc
     */
    protected function _prepareToRender()
    {
        $this->addColumn(
            'text',
            [
                'label'    => __('Text *'),
                'renderer' => false,
                'class'    => 'required-entry'
            ]
        );

        $this->_addAfter       = false;
        $this->_addButtonLabel = __('Add');
    }
}
