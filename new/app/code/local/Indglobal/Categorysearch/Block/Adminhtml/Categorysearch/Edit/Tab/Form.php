<?php

class Indglobal_Categorysearch_Block_Adminhtml_Categorysearch_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
  protected function _prepareForm()
  {
      $form = new Varien_Data_Form();
      $this->setForm($form);
      $fieldset = $form->addFieldset('categorysearch_form', array('legend'=>Mage::helper('categorysearch')->__('Item information')));
     
      $fieldset->addField('title', 'text', array(
          'label'     => Mage::helper('categorysearch')->__('Title'),
          'class'     => 'required-entry',
          'required'  => true,
          'name'      => 'title',
      ));

      $fieldset->addField('filename', 'file', array(
          'label'     => Mage::helper('categorysearch')->__('File'),
          'required'  => false,
          'name'      => 'filename',
	  ));
		
      $fieldset->addField('status', 'select', array(
          'label'     => Mage::helper('categorysearch')->__('Status'),
          'name'      => 'status',
          'values'    => array(
              array(
                  'value'     => 1,
                  'label'     => Mage::helper('categorysearch')->__('Enabled'),
              ),

              array(
                  'value'     => 2,
                  'label'     => Mage::helper('categorysearch')->__('Disabled'),
              ),
          ),
      ));
     
      $fieldset->addField('content', 'editor', array(
          'name'      => 'content',
          'label'     => Mage::helper('categorysearch')->__('Content'),
          'title'     => Mage::helper('categorysearch')->__('Content'),
          'style'     => 'width:700px; height:500px;',
          'wysiwyg'   => false,
          'required'  => true,
      ));
     
      if ( Mage::getSingleton('adminhtml/session')->getCategorysearchData() )
      {
          $form->setValues(Mage::getSingleton('adminhtml/session')->getCategorysearchData());
          Mage::getSingleton('adminhtml/session')->setCategorysearchData(null);
      } elseif ( Mage::registry('categorysearch_data') ) {
          $form->setValues(Mage::registry('categorysearch_data')->getData());
      }
      return parent::_prepareForm();
  }
}