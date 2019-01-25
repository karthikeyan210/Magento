<?php

namespace Mag\Post\Controller\Index;

use Magento\Framework\App\Action\Context;
use Mag\Post\Model\PostFactory;

class Save extends \Magento\Framework\App\Action\Action
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
        try {
            $post = $this->_post->create();
            $data = (array) $this->getRequest()->getPost();
            if ($data['id']) {
                $postUpdate = $post->load($data['id']);
                $postUpdate->setData($data);
                if ($postUpdate->save()) {
                    $this->messageManager->addSuccessMessage(__('You updated the data.'));
                } else {
                    $this->messageManager->addErrorMessage(__('Data was not updated.'));
                }
            } else {
                unset($data['id']);
                $post->setData($data);
                if ($post->save()) {
                    $this->messageManager->addSuccessMessage(__('You saved the data.'));
                } else {
                    $this->messageManager->addErrorMessage(__('Data was not saved.'));
                }
            }
        } catch (\Exception $e) {
            $this->messageManager->addErrorMessage($e->getMessage());
        }
        $resultRedirect = $this->resultRedirectFactory->create();
        $resultRedirect->setPath('post/index/index');
        return $resultRedirect;
    }
}