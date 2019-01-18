<?php
/**
 * Created by PhpStorm.
 * User: aspire
 * Date: 18/1/19
 * Time: 3:03 PM
 */

namespace Mag\Task1\Controller\Index;

class Test
{
    protected $_pageFactory;
    /**
     * Test constructor.
     */
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory
    ) {
        $this->_pageFactory = $pageFactory;
        return parent::__construct($context);
    }
    public function execute()
    {
        return $this->_pageFactory->create();
    }
}
