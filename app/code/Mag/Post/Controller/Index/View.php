<?php

namespace Mag\Post\Controller\Index;

use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\Controller\Result\JsonFactory;

class View extends \Magento\Framework\App\Action\Action
{
	protected $_resultPageFactory;
	/**
     * @var JsonFactory
     */
    protected $_resultJsonFactory;

	public function __construct(
		Context $context,
		PageFactory $resultPageFactory,
		JsonFactory $resultJsonFactory
    ) {
        $this->_resultPageFactory = $resultPageFactory;
        $this->_resultJsonFactory = $resultJsonFactory;
        parent::__construct($context);
    }

	public function execute()
    {
    	$result = $this->_resultJsonFactory->create();
    	$resultPage = $this->_resultPageFactory->create();
    	$postId = $this->getRequest()->getParam('postId');
    	$data = array('postId' => $postId);

        $block = $resultPage->getLayout()
                ->createBlock('Mag\Post\Block\View')
                ->setTemplate('Mag_Post::view.phtml')
                ->setData('data',$data)
                ->toHtml();
 
        $result->setData(['output' => $block]);
        return $result;

        // $resultPage = $this->_resultPageFactory->create();
        // return $resultPage;
    }
}