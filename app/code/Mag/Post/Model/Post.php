<?php
namespace Mag\Post\Model;

use Magento\Framework\Model\AbstractModel;

class Post extends AbstractModel
{
    /**
     * Define resource model
     */
    protected function _construct()
    {
        $this->_init('Mag\Post\Model\ResourceModel\Post');
    }
}