<?php

class Indglobal_Categorysearch_Model_Mysql4_Categorysearch_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('categorysearch/categorysearch');
    }
}