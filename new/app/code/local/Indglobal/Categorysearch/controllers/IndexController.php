<?php
class Indglobal_Categorysearch_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
    	
    	/*
    	 * Load an object by id 
    	 * Request looking like:
    	 * http://site.com/categorysearch?id=15 
    	 *  or
    	 * http://site.com/categorysearch/id/15 	
    	 */
    	/* 
		$categorysearch_id = $this->getRequest()->getParam('id');

  		if($categorysearch_id != null && $categorysearch_id != '')	{
			$categorysearch = Mage::getModel('categorysearch/categorysearch')->load($categorysearch_id)->getData();
		} else {
			$categorysearch = null;
		}	
		*/
		
		 /*
    	 * If no param we load a the last created item
    	 */ 
    	/*
    	if($categorysearch == null) {
			$resource = Mage::getSingleton('core/resource');
			$read= $resource->getConnection('core_read');
			$categorysearchTable = $resource->getTableName('categorysearch');
			
			$select = $read->select()
			   ->from($categorysearchTable,array('categorysearch_id','title','content','status'))
			   ->where('status',1)
			   ->order('created_time DESC') ;
			   
			$categorysearch = $read->fetchRow($select);
		}
		Mage::register('categorysearch', $categorysearch);
		*/

			
		$this->loadLayout();     
		$this->renderLayout();
    }
}