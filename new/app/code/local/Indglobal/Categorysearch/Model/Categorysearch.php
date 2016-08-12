<?php

class Indglobal_Categorysearch_Model_Categorysearch extends Mage_Core_Model_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('categorysearch/categorysearch');
    }
}