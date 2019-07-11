<?php
namespace Aaxis\HelloWorld\Model;
class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
	const CACHE_TAG = 'aaxis_helloworld_post';

	protected $_cacheTag = 'aaxis_helloworld_post';

	protected $_eventPrefix = 'aaxis_helloworld_post';

	protected function _construct()
	{
		$this->_init('Aaxis\HelloWorld\Model\ResourceModel\Post');
	}

	public function getIdentities()
	{
		return [self::CACHE_TAG . '_' . $this->getId()];
	}

	public function getDefaultValues()
	{
		$values = [];

		return $values;
	}
}