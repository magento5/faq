<?php
class Indglobal_Faqmanage_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
    	
    	/*
    	 * Load an object by id 
    	 * Request looking like:
    	 * http://site.com/faqmanage?id=15 
    	 *  or
    	 * http://site.com/faqmanage/id/15 	
    	 */
    	/* 
		$faqmanage_id = $this->getRequest()->getParam('id');

  		if($faqmanage_id != null && $faqmanage_id != '')	{
			$faqmanage = Mage::getModel('faqmanage/faqmanage')->load($faqmanage_id)->getData();
		} else {
			$faqmanage = null;
		}	
		*/
		
		 /*
    	 * If no param we load a the last created item
    	 */ 
    	/*
    	if($faqmanage == null) {
			$resource = Mage::getSingleton('core/resource');
			$read= $resource->getConnection('core_read');
			$faqmanageTable = $resource->getTableName('faqmanage');
			
			$select = $read->select()
			   ->from($faqmanageTable,array('faqmanage_id','title','content','status'))
			   ->where('status',1)
			   ->order('created_time DESC') ;
			   
			$faqmanage = $read->fetchRow($select);
		}
		Mage::register('faqmanage', $faqmanage);
		*/

			
		$this->loadLayout();     
		$this->renderLayout();
    }
}