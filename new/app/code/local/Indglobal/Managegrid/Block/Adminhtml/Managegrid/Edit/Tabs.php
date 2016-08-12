<?php

class Indglobal_Managegrid_Block_Adminhtml_Managegrid_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{

  public function __construct()
  {
      parent::__construct();
      $this->setId('managegrid_tabs');
      $this->setDestElementId('edit_form');
      $this->setTitle(Mage::helper('managegrid')->__('Item Information'));
  }

  protected function _beforeToHtml()
  {
      $this->addTab('form_section', array(
          'label'     => Mage::helper('managegrid')->__('Item Information'),
          'title'     => Mage::helper('managegrid')->__('Item Information'),
          'content'   => $this->getLayout()->createBlock('managegrid/adminhtml_managegrid_edit_tab_form')->toHtml(),
      ));
     
      return parent::_beforeToHtml();
  }
}