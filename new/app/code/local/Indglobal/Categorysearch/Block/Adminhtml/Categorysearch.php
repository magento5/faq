<?php
class Indglobal_Categorysearch_Block_Adminhtml_Categorysearch extends Mage_Adminhtml_Block_Widget_Grid_Container
{
  public function __construct()
  {
    $this->_controller = 'adminhtml_categorysearch';
    $this->_blockGroup = 'categorysearch';
    $this->_headerText = Mage::helper('categorysearch')->__('Item Manager');
    $this->_addButtonLabel = Mage::helper('categorysearch')->__('Add Item');
    parent::__construct();
  }
}