<?php

namespace ChintakExtensions\PromotionBar\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Helper\Context;
use Magento\Framework\App\Config\ScopeConfigInterface;

class Data extends AbstractHelper
{

    /**
     * @param Context $context
     */
    public function __construct(
        Context $context
    )
    {
        parent::__construct($context);
    }

    /*
     * @return bool
     */
    public function isEnabled($scope = ScopeConfigInterface::SCOPE_TYPE_DEFAULT)
    {
        return $this->scopeConfig->isSetFlag(
            'promotionbar/general/enabled',
            $scope
        );
    }

    /*
     * @return bool
     */
    public function isCloseOn($scope = ScopeConfigInterface::SCOPE_TYPE_DEFAULT)
    {
        return $this->scopeConfig->getValue(
            'promotionbar/general/close',
            $scope
        );
    }
    
    /*
     * @return bool
     */
    public function isScrollOn($scope = ScopeConfigInterface::SCOPE_TYPE_DEFAULT)
    {
        return $this->scopeConfig->getValue(
            'promotionbar/textstyle/scroll',
            $scope
        );
    }

    /*
     * @return bool
     */
    public function isSliderBtnOn($scope = ScopeConfigInterface::SCOPE_TYPE_DEFAULT)
    {
        return $this->scopeConfig->getValue(
            'promotionbar/textstyle/sliderbtn',
            $scope
        );
    }

     /*
     * @return bool
     */
    public function isSliderOn($scope = ScopeConfigInterface::SCOPE_TYPE_DEFAULT)
    {
        return $this->scopeConfig->getValue(
            'promotionbar/textstyle/slider',
            $scope
        );
    }
    

    /*
     * @return string
     */
    public function getTitle($scope = ScopeConfigInterface::SCOPE_TYPE_DEFAULT)
    {
        return $this->scopeConfig->getValue(
            'promotionbar/general/display_text',
            $scope
        );
    }

    /*
     * @return string
     */
    public function getAutoHide($scope = ScopeConfigInterface::SCOPE_TYPE_DEFAULT)
    {
        return $this->scopeConfig->getValue(
            'promotionbar/general/hide',
            $scope
        );
    }

    
    public function getMultiText($scope = ScopeConfigInterface::SCOPE_TYPE_DEFAULT)
    {
        return $this->scopeConfig->getValue(
            'promotionbar/general/multi_text',
            $scope
        );
    }

    /*
     * @return string
     */
    public function getPosition($scope = ScopeConfigInterface::SCOPE_TYPE_DEFAULT)
    {
        return $this->scopeConfig->getValue(
            'promotionbar/textstyle/position',
            $scope
        );
    }

    /*
     * @return string
     */
    public function getAlignment($scope = ScopeConfigInterface::SCOPE_TYPE_DEFAULT)
    {
        return $this->scopeConfig->getValue(
            'promotionbar/textstyle/text_alignment',
            $scope
        );
    }

    /*
     * @return string
     */
    public function getFont($scope = ScopeConfigInterface::SCOPE_TYPE_DEFAULT)
    {
        return $this->scopeConfig->getValue(
            'promotionbar/textstyle/font_size',
            $scope
        );
    }

    /*
     * @return string
     */
    public function getColor($scope = ScopeConfigInterface::SCOPE_TYPE_DEFAULT)
    {
        return $this->scopeConfig->getValue(
            'promotionbar/textstyle/color',
            $scope
        );
    }

    /*
     * @return string
     */
    public function getBackgroundcolor($scope = ScopeConfigInterface::SCOPE_TYPE_DEFAULT)
    {
        return $this->scopeConfig->getValue(
            'promotionbar/textstyle/bg_color',
            $scope
        );
    }

    /*
     * @return string
     */
    public function getCustomcss($scope = ScopeConfigInterface::SCOPE_TYPE_DEFAULT)
    {
        return $this->scopeConfig->getValue(
            'promotionbar/textstyle/custom_css',
            $scope
        );
    }
}