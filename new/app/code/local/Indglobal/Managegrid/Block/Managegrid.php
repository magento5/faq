<?php
class Indglobal_Managegrid_Block_Managegrid extends Mage_Core_Block_Template
{
	public function _prepareLayout()
    {
		return parent::_prepareLayout();
    }
    
     public function getManagegrid()     
     { 
        if (!$this->hasData('managegrid')) {
            $this->setData('managegrid', Mage::registry('managegrid'));
        }
        return $this->getData('managegrid');
        
    }
}