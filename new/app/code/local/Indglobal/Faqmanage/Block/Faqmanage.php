<?php
class Indglobal_Faqmanage_Block_Faqmanage extends Mage_Core_Block_Template
{
	public function _prepareLayout()
    {
		return parent::_prepareLayout();
    }
    
     public function getFaqmanage()     
     { 
        if (!$this->hasData('faqmanage')) {
            $this->setData('faqmanage', Mage::registry('faqmanage'));
        }
        return $this->getData('faqmanage');
        
    }
}