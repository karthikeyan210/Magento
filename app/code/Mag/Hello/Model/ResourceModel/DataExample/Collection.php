<?php 
namespace Mag\Hello\Model\ResourceModel\DataExample;
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
	public function _construct()
	{
		$this->_init("Mag\Hello\Model\DataExample","Mag\Hello\Model\ResourceModel\DataExample");
	}
}