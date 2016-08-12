<?php

class Indglobal_Faqmanage_Model_Mysql4_Faqmanage extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {    
        // Note that the faqmanage_id refers to the key field in your database table.
        $this->_init('faqmanage/faqmanage', 'faqmanage_id');
    }
}