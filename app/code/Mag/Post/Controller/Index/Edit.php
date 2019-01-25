<?php

namespace Mag\Post\Controller\Index;

use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\Controller\Result\JsonFactory;
use Mag\Post\Model\PostFactory;

class Edit extends \Magento\Framework\App\Action\Action
{
	protected $_resultPageFactory;
	/**
     * @var JsonFactory
     */
    protected $_resultJsonFactory;
    protected $_post;

	public function __construct(
		Context $context,
		PageFactory $resultPageFactory,
		JsonFactory $resultJsonFactory,
        PostFactory $post
    ) {
        $this->_resultPageFactory = $resultPageFactory;
        $this->_resultJsonFactory = $resultJsonFactory;
        $this->_post = $post;
        parent::__construct($context);
    }

	public function execute()
    {
        $result = $this->_resultJsonFactory->create();
        if ($this->getRequest()->isAjax()) {
            $postId = $this->getRequest()->getParam('postId');
            $post = $this->_post->create();
            $data = $post->load($postId);
            $output = array(
                'author' => $data->getAuthor(),
                'id' => $data->getId(),
                'title' => $data->getTitle(),
                'content' => $data->getContent(),
                'created_at' => $data->getCreatedAt()
            );
            return $result->setData($output);
        }
    }
}