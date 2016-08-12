<?php

class Indglobal_Categorysearch_Block_Adminhtml_Categorysearch_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{

  public function __construct()
  {
      parent::__construct();
      $this->setId('categorysearch_tabs');
      $this->setDestElementId('edit_form');
      $this->setTitle(Mage::helper('categorysearch')->__('Item Information'));
  }

  protected function _beforeToHtml()
  {
      $this->addTab('form_section', array(
          'label'     => Mage::helper('categorysearch')->__('Item Information'),
          'title'     => Mage::helper('categorysearch')->__('Item Information'),
          'content'   => $this->getLayout()->createBlock('categorysearch/adminhtml_categorysearch_edit_tab_form')->toHtml(),
      ));
     
      return parent::_beforeToHtml();
  }
}