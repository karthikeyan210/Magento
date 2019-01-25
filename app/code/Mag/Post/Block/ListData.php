<?php

namespace Mag\Post\Block;

use Magento\Framework\View\Element\Template\Context;
use Mag\Post\Model\PostFactory;

/**
 * Test List block
 */
class ListData extends \Magento\Framework\View\Element\Template
{
    public function __construct(
        Context $context,
        PostFactory $post
    ) {
        $this->_post = $post;
        parent::__construct($context);
    }
    public function getTestCollection()
    {
        $post = $this->_post->create();
        $collection = $post->getCollection();

        return $collection;
    }
}