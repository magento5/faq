<?php

class Indglobal_Faqmanage_Model_Faqmanage extends Mage_Core_Model_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('faqmanage/faqmanage');
    }
}