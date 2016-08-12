<?php
class Indglobal_Managegrid_Block_Adminhtml_Managegrid extends Mage_Adminhtml_Block_Widget_Grid_Container
{
  public function __construct()
  {
    $this->_controller = 'adminhtml_managegrid';
    $this->_blockGroup = 'managegrid';
    $this->_headerText = Mage::helper('managegrid')->__('Item Manager');
    $this->_addButtonLabel = Mage::helper('managegrid')->__('Add Item');
    parent::__construct();
  }
}