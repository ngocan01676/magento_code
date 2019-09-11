<?php 
namespace Robin\Eshoper\Block;
use Magento\Framework\View\Element\Template;
/**
 * 
 */
class HeaderTop extends \Magento\Framework\View\Element\Template
{
	
	protected function _beforeToHtml()
	{
		$config=$this->_scopeConfig;
		$facebook=$config->getValue('social/social_config/facebook');
		$this->setData('store_facebook',$facebook);

	}
}



 ?>