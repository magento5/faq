<?php

class Indglobal_Categorysearch_Block_Adminhtml_Categorysearch_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct()
    {
        parent::__construct();
                 
        $this->_objectId = 'id';
        $this->_blockGroup = 'categorysearch';
        $this->_controller = 'adminhtml_categorysearch';
        
        $this->_updateButton('save', 'label', Mage::helper('categorysearch')->__('Save Item'));
        $this->_updateButton('delete', 'label', Mage::helper('categorysearch')->__('Delete Item'));
		
        $this->_addButton('saveandcontinue', array(
            'label'     => Mage::helper('adminhtml')->__('Save And Continue Edit'),
            'onclick'   => 'saveAndContinueEdit()',
            'class'     => 'save',
        ), -100);

        $this->_formScripts[] = "
            function toggleEditor() {
                if (tinyMCE.getInstanceById('categorysearch_content') == null) {
                    tinyMCE.execCommand('mceAddControl', false, 'categorysearch_content');
                } else {
                    tinyMCE.execCommand('mceRemoveControl', false, 'categorysearch_content');
                }
            }

            function saveAndContinueEdit(){
                editForm.submit($('edit_form').action+'back/edit/');
            }
        ";
    }

    public function getHeaderText()
    {
        if( Mage::registry('categorysearch_data') && Mage::registry('categorysearch_data')->getId() ) {
            return Mage::helper('categorysearch')->__("Edit Item '%s'", $this->htmlEscape(Mage::registry('categorysearch_data')->getTitle()));
        } else {
            return Mage::helper('categorysearch')->__('Add Item');
        }
    }
}