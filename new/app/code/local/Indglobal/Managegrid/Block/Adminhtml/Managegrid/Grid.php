<?php

class Indglobal_Managegrid_Block_Adminhtml_Managegrid_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
  public function __construct()
  {
      parent::__construct();
      $this->setId('managegridGrid');
      $this->setDefaultSort('managegrid_id');
      $this->setDefaultDir('ASC');
      $this->setSaveParametersInSession(true);
  }

  protected function _prepareCollection()
  {
      $collection = Mage::getModel('managegrid/managegrid')->getCollection();
      $this->setCollection($collection);
      return parent::_prepareCollection();
  }

  protected function _prepareColumns()
  {
      $this->addColumn('managegrid_id', array(
          'header'    => Mage::helper('managegrid')->__('ID'),
          'align'     =>'right',
          'width'     => '50px',
          'index'     => 'managegrid_id',
      ));

      $this->addColumn('title', array(
          'header'    => Mage::helper('managegrid')->__('Title'),
          'align'     =>'left',
          'index'     => 'title',
      ));
      $this->addColumn('categoryids', array(
          'header'    => Mage::helper('managegrid')->__('Category Ids'),
          'align'     =>'left',
          'index'     => 'categoryids',
      ));

	  /*
      $this->addColumn('content', array(
			'header'    => Mage::helper('managegrid')->__('Item Content'),
			'width'     => '150px',
			'index'     => 'content',
      ));
	  */

      $this->addColumn('status', array(
          'header'    => Mage::helper('managegrid')->__('Status'),
          'align'     => 'left',
          'width'     => '80px',
          'index'     => 'status',
          'type'      => 'options',
          'options'   => array(
              1 => 'Enabled',
              2 => 'Disabled',
          ),
      ));
	  
        $this->addColumn('action',
            array(
                'header'    =>  Mage::helper('managegrid')->__('Action'),
                'width'     => '100',
                'type'      => 'action',
                'getter'    => 'getId',
                'actions'   => array(
                    array(
                        'caption'   => Mage::helper('managegrid')->__('Edit'),
                        'url'       => array('base'=> '*/*/edit'),
                        'field'     => 'id'
                    )
                ),
                'filter'    => false,
                'sortable'  => false,
                'index'     => 'stores',
                'is_system' => true,
        ));
		
		$this->addExportType('*/*/exportCsv', Mage::helper('managegrid')->__('CSV'));
		$this->addExportType('*/*/exportXml', Mage::helper('managegrid')->__('XML'));
	  
      return parent::_prepareColumns();
  }

    protected function _prepareMassaction()
    {
        $this->setMassactionIdField('managegrid_id');
        $this->getMassactionBlock()->setFormFieldName('managegrid');

        $this->getMassactionBlock()->addItem('delete', array(
             'label'    => Mage::helper('managegrid')->__('Delete'),
             'url'      => $this->getUrl('*/*/massDelete'),
             'confirm'  => Mage::helper('managegrid')->__('Are you sure?')
        ));

        $statuses = Mage::getSingleton('managegrid/status')->getOptionArray();

        array_unshift($statuses, array('label'=>'', 'value'=>''));
        $this->getMassactionBlock()->addItem('status', array(
             'label'=> Mage::helper('managegrid')->__('Change status'),
             'url'  => $this->getUrl('*/*/massStatus', array('_current'=>true)),
             'additional' => array(
                    'visibility' => array(
                         'name' => 'status',
                         'type' => 'select',
                         'class' => 'required-entry',
                         'label' => Mage::helper('managegrid')->__('Status'),
                         'values' => $statuses
                     )
             )
        ));
        return $this;
    }

  public function getRowUrl($row)
  {
      return $this->getUrl('*/*/edit', array('id' => $row->getId()));
  }

}