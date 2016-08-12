<?php
class Indglobal_Categorysearch_Block_Categorysearch extends Mage_Core_Block_Template
{
	public function _prepareLayout()
    {
		return parent::_prepareLayout();
    }
    
     public function getCategorysearch()     
     { 
        if (!$this->hasData('categorysearch')) {
            $this->setData('categorysearch', Mage::registry('categorysearch'));
        }
        return $this->getData('categorysearch');
        
    }
}