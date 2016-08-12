<?php

class Indglobal_Managegrid_Block_Adminhtml_Managegrid_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct()
    {
        parent::__construct();
                 
        $this->_objectId = 'id';
        $this->_blockGroup = 'managegrid';
        $this->_controller = 'adminhtml_managegrid';
        
        $this->_updateButton('save', 'label', Mage::helper('managegrid')->__('Save Item'));
        $this->_updateButton('delete', 'label', Mage::helper('managegrid')->__('Delete Item'));
		
        $this->_addButton('saveandcontinue', array(
            'label'     => Mage::helper('adminhtml')->__('Save And Continue Edit'),
            'onclick'   => 'saveAndContinueEdit()',
            'class'     => 'save',
        ), -100);

        $this->_formScripts[] = "
            function toggleEditor() {
                if (tinyMCE.getInstanceById('managegrid_content') == null) {
                    tinyMCE.execCommand('mceAddControl', false, 'managegrid_content');
                } else {
                    tinyMCE.execCommand('mceRemoveControl', false, 'managegrid_content');
                }
            }

            function saveAndContinueEdit(){
                editForm.submit($('edit_form').action+'back/edit/');
            }
        ";
    }

    public function getHeaderText()
    {
        if( Mage::registry('managegrid_data') && Mage::registry('managegrid_data')->getId() ) {
            return Mage::helper('managegrid')->__("Edit Item '%s'", $this->htmlEscape(Mage::registry('managegrid_data')->getTitle()));
        } else {
            return Mage::helper('managegrid')->__('Add Item');
        }
    }
}