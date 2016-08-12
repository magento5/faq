<?php

class Indglobal_Faqmanage_Block_Adminhtml_Faqmanage_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct()
    {
        parent::__construct();
                 
        $this->_objectId = 'id';
        $this->_blockGroup = 'faqmanage';
        $this->_controller = 'adminhtml_faqmanage';
        
        $this->_updateButton('save', 'label', Mage::helper('faqmanage')->__('Save Item'));
        $this->_updateButton('delete', 'label', Mage::helper('faqmanage')->__('Delete Item'));
		
        $this->_addButton('saveandcontinue', array(
            'label'     => Mage::helper('adminhtml')->__('Save And Continue Edit'),
            'onclick'   => 'saveAndContinueEdit()',
            'class'     => 'save',
        ), -100);

        $this->_formScripts[] = "
            function toggleEditor() {
                if (tinyMCE.getInstanceById('faqmanage_content') == null) {
                    tinyMCE.execCommand('mceAddControl', false, 'faqmanage_content');
                } else {
                    tinyMCE.execCommand('mceRemoveControl', false, 'faqmanage_content');
                }
            }

            function saveAndContinueEdit(){
                editForm.submit($('edit_form').action+'back/edit/');
            }
        ";
    }

    public function getHeaderText()
    {
        if( Mage::registry('faqmanage_data') && Mage::registry('faqmanage_data')->getId() ) {
            return Mage::helper('faqmanage')->__("Edit Item '%s'", $this->htmlEscape(Mage::registry('faqmanage_data')->getTitle()));
        } else {
            return Mage::helper('faqmanage')->__('Add Item');
        }
    }
}