<?php

class Indglobal_Categorysearch_Model_Mysql4_Categorysearch extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {    
        // Note that the categorysearch_id refers to the key field in your database table.
        $this->_init('categorysearch/categorysearch', 'categorysearch_id');
    }
}