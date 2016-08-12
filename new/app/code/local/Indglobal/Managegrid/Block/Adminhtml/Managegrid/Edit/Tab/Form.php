<?php

class Indglobal_Managegrid_Block_Adminhtml_Managegrid_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
  protected function _prepareForm()
  {
      $form = new Varien_Data_Form();
      $this->setForm($form);
      $fieldset = $form->addFieldset('managegrid_form', array('legend'=>Mage::helper('managegrid')->__('Item information')));
     
      $fieldset->addField('title', 'text', array(
          'label'     => Mage::helper('managegrid')->__('Title'),
          'class'     => 'required-entry',
          'required'  => true,
          'name'      => 'title',
      ));

      $fieldset->addField('categoryids', 'text', array(
          'label'     => Mage::helper('managegrid')->__('Category Ids'),
          'class'     => 'required-entry',
          'required'  => true,
          'name'      => 'categoryids',
      ));
		
      $fieldset->addField('status', 'select', array(
          'label'     => Mage::helper('managegrid')->__('Status'),
          'name'      => 'status',
          'values'    => array(
              array(
                  'value'     => 1,
                  'label'     => Mage::helper('managegrid')->__('Enabled'),
              ),

              array(
                  'value'     => 2,
                  'label'     => Mage::helper('managegrid')->__('Disabled'),
              ),
          ),
      ));
     
     
      if ( Mage::getSingleton('adminhtml/session')->getManagegridData() )
      {
          $form->setValues(Mage::getSingleton('adminhtml/session')->getManagegridData());
          Mage::getSingleton('adminhtml/session')->setManagegridData(null);
      } elseif ( Mage::registry('managegrid_data') ) {
          $form->setValues(Mage::registry('managegrid_data')->getData());
      }
      return parent::_prepareForm();
  }
}