<?php

namespace Mag\Post\Model\ResourceModel\Post;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Define model & resource model
     */
    protected function _construct()
    {
        $this->_init(
            'Mag\Post\Model\Post',
            'Mag\Post\Model\ResourceModel\Post'
        );
    }
}