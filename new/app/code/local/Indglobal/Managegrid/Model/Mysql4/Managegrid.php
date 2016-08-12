<?php

class Indglobal_Managegrid_Model_Mysql4_Managegrid extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {    
        // Note that the managegrid_id refers to the key field in your database table.
        $this->_init('managegrid/managegrid', 'managegrid_id');
    }
}