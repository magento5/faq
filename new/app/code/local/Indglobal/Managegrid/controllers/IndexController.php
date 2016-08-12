<?php
class Indglobal_Managegrid_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
    	
    	/*
    	 * Load an object by id 
    	 * Request looking like:
    	 * http://site.com/managegrid?id=15 
    	 *  or
    	 * http://site.com/managegrid/id/15 	
    	 */
    	/* 
		$managegrid_id = $this->getRequest()->getParam('id');

  		if($managegrid_id != null && $managegrid_id != '')	{
			$managegrid = Mage::getModel('managegrid/managegrid')->load($managegrid_id)->getData();
		} else {
			$managegrid = null;
		}	
		*/
		
		 /*
    	 * If no param we load a the last created item
    	 */ 
    	/*
    	if($managegrid == null) {
			$resource = Mage::getSingleton('core/resource');
			$read= $resource->getConnection('core_read');
			$managegridTable = $resource->getTableName('managegrid');
			
			$select = $read->select()
			   ->from($managegridTable,array('managegrid_id','title','content','status'))
			   ->where('status',1)
			   ->order('created_time DESC') ;
			   
			$managegrid = $read->fetchRow($select);
		}
		Mage::register('managegrid', $managegrid);
		*/

			
		$this->loadLayout();     
		$this->renderLayout();
    }
}