<?php

class Philwinkle_StaticBlockGridLinks_Block_Cms_Block_Grid extends Mage_Adminhtml_Block_Cms_Block_Grid
{
    protected function _prepareColumns()
    {
        parent::_prepareColumns();
        $this->addColumn('action',
            array(
                'header'    => Mage::helper('cms')->__('Action'),
                'width'     => '50px',
                'type'      => 'action',
                'getter'     => 'getId',
                'actions'   => array(
                    array(
                        'caption' => Mage::helper('cms')->__('View'),
                        'url'     => array('base'=>'*/*/edit'),
                        'field'   => 'block_id'
                        )
                    ),
                'filter'    => false,
                'sortable'  => false
            )
        );

    }
}
