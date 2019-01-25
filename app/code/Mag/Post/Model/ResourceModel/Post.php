<?php

namespace Mag\Post\Model\ResourceModel;

class Post extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Define main table
     */
    protected function _construct()
    {
        $this->_init('post', 'id');   //here "vky_test" is table name and "id" is the primary key of custom table
    }
}