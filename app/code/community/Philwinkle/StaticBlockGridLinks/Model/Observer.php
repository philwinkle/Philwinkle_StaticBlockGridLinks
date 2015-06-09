<?php

class Philwinkle_StaticBlockGridLinks_Model_Observer
{
    public function coreBlockAbstractPrepareLayoutBefore($observer)
    {
        $block = $observer->getBlock();
        if (!isset($block)) {
            return $this;
        }
        
        if ($block->getType() == 'adminhtml/cms_block_grid') {
            $block->addColumnAfter('action',
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
                ), 
                'update_time');
        }

        return $this;
    }
}