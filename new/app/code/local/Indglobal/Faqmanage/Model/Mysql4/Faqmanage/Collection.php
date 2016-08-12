<?php

class Indglobal_Faqmanage_Model_Mysql4_Faqmanage_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('faqmanage/faqmanage');
    }
}