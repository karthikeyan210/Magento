<?php

namespace Mag\Post\Block;

use Magento\Framework\View\Element\Template\Context;
use Mag\Post\Model\PostFactory;
/**
 * Test View block
 */
class View extends \Magento\Framework\View\Element\Template
{
    public function __construct(
        Context $context,
        PostFactory $post
    ) {
        $this->_post = $post;
        parent::__construct($context);
    }

    public function getSingleData($id)
    {
        // $id = $this->getRequest()->getParam('id');
        $post = $this->_post->create();
        $singleData = $post->load($id);
        return $singleData;
    }
}