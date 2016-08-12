<?php

class Indglobal_Faqmanage_Block_Adminhtml_Faqmanage_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
  protected function _prepareForm()
  {
      $form = new Varien_Data_Form();
      $this->setForm($form);
      $fieldset = $form->addFieldset('faqmanage_form', array('legend'=>Mage::helper('faqmanage')->__('Item information')));
     
      $fieldset->addField('catid', 'text', array(
          'label'     => Mage::helper('faqmanage')->__('Cat Id'),
          'class'     => 'required-entry',
          'required'  => true,
          'name'      => 'catid',
      ));
      $fieldset->addField('question1', 'text', array(
          'label'     => Mage::helper('faqmanage')->__('Question 1'),
          'class'     => 'required-entry',
          'required'  => true,
          'name'      => 'question1',
      ));
      $fieldset->addField('question2', 'text', array(
          'label'     => Mage::helper('faqmanage')->__('Question 2'),
          'class'     => 'required-entry',
          'required'  => true,
          'name'      => 'question2',
      ));
      $fieldset->addField('question3', 'text', array(
          'label'     => Mage::helper('faqmanage')->__('Question 3'),
          'class'     => 'required-entry',
          'required'  => true,
          'name'      => 'question3',
      ));
      $fieldset->addField('question4', 'text', array(
          'label'     => Mage::helper('faqmanage')->__('Question 4'),
          'class'     => 'required-entry',
          'required'  => true,
          'name'      => 'question4',
      ));

		
      $fieldset->addField('status', 'select', array(
          'label'     => Mage::helper('faqmanage')->__('Status'),
          'name'      => 'status',
          'values'    => array(
              array(
                  'value'     => 1,
                  'label'     => Mage::helper('faqmanage')->__('Enabled'),
              ),

              array(
                  'value'     => 2,
                  'label'     => Mage::helper('faqmanage')->__('Disabled'),
              ),
          ),
      ));
     
      if ( Mage::getSingleton('adminhtml/session')->getFaqmanageData() )
      {
          $form->setValues(Mage::getSingleton('adminhtml/session')->getFaqmanageData());
          Mage::getSingleton('adminhtml/session')->setFaqmanageData(null);
      } elseif ( Mage::registry('faqmanage_data') ) {
          $form->setValues(Mage::registry('faqmanage_data')->getData());
      }
      return parent::_prepareForm();
  }
}