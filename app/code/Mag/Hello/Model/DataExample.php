<?php 
namespace Mag\Hello\Model;
class DataExample extends \Magento\Framework\Model\AbstractModel
{
	public function _construct()
	{
		$this->_init("Mag\Hello\Model\ResourceModel\DataExample");
	}
}