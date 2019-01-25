<?php
 
namespace Mag\Hello\Controller\Schema;
 
use Magento\Framework\App\Action\Context;
use Mag\Hello\Model\DataExampleFactory;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\View\Result\PageFactory;
class Index extends \Magento\Framework\App\Action\Action
{
    protected $_resultPageFactory;
    protected $_dataExample;
    protected $resultRedirect;
 
    public function __construct(
        Context $context, 
        PageFactory $resultPageFactory, 
        ResultFactory $result,
        DataExampleFactory  $dataExample
    )
    {
        $this->_resultPageFactory = $resultPageFactory;
        $this->_dataExample = $dataExample;
        $this->resultRedirect = $result;
        parent::__construct($context);
    }
 
    public function execute()
    {
        echo "schema"; exit;
        // $resultRedirect = $this->resultRedirect->create(ResultFactory::TYPE_REDIRECT);
        // $resultRedirect->setUrl($this->_redirect->getRefererUrl());
        // $model = $this->_dataExample->create();
        // $model->addData([
        //     "title" => 'Title 01',
        //     "content" => 'Content 01',
        //     "status" => true,
        //     "sort_order" => 1
        // ]);
        // $saveData = $model->save();
        // if($saveData){
        //     $this->messageManager->addSuccess( __('Insert Record Successfully !') );
        // }
        // return $resultRedirect;
    }
}