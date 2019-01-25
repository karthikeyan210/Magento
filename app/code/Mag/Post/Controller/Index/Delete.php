<?php

namespace Mag\Post\Controller\Index;

use Magento\Framework\App\Action\Context;
use Mag\Post\Model\PostFactory;

class Delete extends \Magento\Framework\App\Action\Action
{
	/**
     * @var Post
     */
    protected $_post;

	public function __construct(
		Context $context,
        PostFactory $post
    ) {
        $this->_post = $post;
        parent::__construct($context);
    }
	public function execute()
    {
    	$id = $this->getRequest()->getParam('id');
        try {
            $post = $this->_post->create();
            $post->load($id);
            $post->delete();
        	$this->messageManager->addSuccessMessage(__('Post deleted successfully.'));
        } catch (\Exception $e) {
            $this->messageManager->addErrorMessage($e->getMessage());
        }
        $resultRedirect = $this->resultRedirectFactory->create();
        $resultRedirect->setPath('post/index/index');

        return $resultRedirect;
    }
}