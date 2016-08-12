<?php
class Indglobal_Faqmanage_Block_Adminhtml_Faqmanage extends Mage_Adminhtml_Block_Widget_Grid_Container
{
  public function __construct()
  {
    $this->_controller = 'adminhtml_faqmanage';
    $this->_blockGroup = 'faqmanage';
    $this->_headerText = Mage::helper('faqmanage')->__('Item Manager');
    $this->_addButtonLabel = Mage::helper('faqmanage')->__('Add Item');
    parent::__construct();
  }
}