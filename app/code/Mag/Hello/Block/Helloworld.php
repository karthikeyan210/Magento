<?php
namespace Mag\Hello\Block;
 
class Helloworld extends \Magento\Framework\View\Element\Template
{
    public function sayHello()
    {
        return __('Hello World!');
    }
}