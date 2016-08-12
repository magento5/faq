<?php

class Indglobal_Managegrid_Model_Managegrid extends Mage_Core_Model_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('managegrid/managegrid');
    }
}