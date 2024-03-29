<?php

class Indglobal_Faqmanage_Block_Adminhtml_Faqmanage_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
  public function __construct()
  {
      parent::__construct();
      $this->setId('faqmanageGrid');
      $this->setDefaultSort('faqmanage_id');
      $this->setDefaultDir('ASC');
      $this->setSaveParametersInSession(true);
  }

  protected function _prepareCollection()
  {
      $collection = Mage::getModel('faqmanage/faqmanage')->getCollection();
      $this->setCollection($collection);
      return parent::_prepareCollection();
  }

  protected function _prepareColumns()
  {
      $this->addColumn('faqmanage_id', array(
          'header'    => Mage::helper('faqmanage')->__('ID'),
          'align'     =>'right',
          'width'     => '50px',
          'index'     => 'faqmanage_id',
      ));

      $this->addColumn('catid', array(
          'header'    => Mage::helper('faqmanage')->__('Cat Id'),
          'align'     =>'left',
          'index'     => 'catid',
      ));

	  /*
      $this->addColumn('content', array(
			'header'    => Mage::helper('faqmanage')->__('Item Content'),
			'width'     => '150px',
			'index'     => 'content',
      ));
	  */

      $this->addColumn('status', array(
          'header'    => Mage::helper('faqmanage')->__('Status'),
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
                'header'    =>  Mage::helper('faqmanage')->__('Action'),
                'width'     => '100',
                'type'      => 'action',
                'getter'    => 'getId',
                'actions'   => array(
                    array(
                        'caption'   => Mage::helper('faqmanage')->__('Edit'),
                        'url'       => array('base'=> '*/*/edit'),
                        'field'     => 'id'
                    )
                ),
                'filter'    => false,
                'sortable'  => false,
                'index'     => 'stores',
                'is_system' => true,
        ));
		
		$this->addExportType('*/*/exportCsv', Mage::helper('faqmanage')->__('CSV'));
		$this->addExportType('*/*/exportXml', Mage::helper('faqmanage')->__('XML'));
	  
      return parent::_prepareColumns();
  }

    protected function _prepareMassaction()
    {
        $this->setMassactionIdField('faqmanage_id');
        $this->getMassactionBlock()->setFormFieldName('faqmanage');

        $this->getMassactionBlock()->addItem('delete', array(
             'label'    => Mage::helper('faqmanage')->__('Delete'),
             'url'      => $this->getUrl('*/*/massDelete'),
             'confirm'  => Mage::helper('faqmanage')->__('Are you sure?')
        ));

        $statuses = Mage::getSingleton('faqmanage/status')->getOptionArray();

        array_unshift($statuses, array('label'=>'', 'value'=>''));
        $this->getMassactionBlock()->addItem('status', array(
             'label'=> Mage::helper('faqmanage')->__('Change status'),
             'url'  => $this->getUrl('*/*/massStatus', array('_current'=>true)),
             'additional' => array(
                    'visibility' => array(
                         'name' => 'status',
                         'type' => 'select',
                         'class' => 'required-entry',
                         'label' => Mage::helper('faqmanage')->__('Status'),
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