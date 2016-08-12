<?php

class Indglobal_Faqmanage_Block_Adminhtml_Faqmanage_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{

  public function __construct()
  {
      parent::__construct();
      $this->setId('faqmanage_tabs');
      $this->setDestElementId('edit_form');
      $this->setTitle(Mage::helper('faqmanage')->__('Item Information'));
  }

  protected function _beforeToHtml()
  {
      $this->addTab('form_section', array(
          'label'     => Mage::helper('faqmanage')->__('Item Information'),
          'title'     => Mage::helper('faqmanage')->__('Item Information'),
          'content'   => $this->getLayout()->createBlock('faqmanage/adminhtml_faqmanage_edit_tab_form')->toHtml(),
      ));
     
      return parent::_beforeToHtml();
  }
}