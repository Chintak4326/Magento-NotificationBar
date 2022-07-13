<?php

namespace ChintakExtensions\PromotionBar\Controller\Index;

class Config extends \Magento\Framework\App\Action\Action
{

	protected $helperData;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\ChintakExtensions\PromotionBar\Helper\Data $helperData

	){
		$this->helperData = $helperData;
		return parent::__construct($context);
	}

	public function execute()
	{
		echo $this->helperData->getGeneralConfig('enabled');
		echo $this->helperData->getGeneralConfig('display_text');
		exit();

	}
}