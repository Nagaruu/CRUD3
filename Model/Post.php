<?php

namespace AHT\Blog\Model;

use AHT\Blog\Api\Data\PostInterface;
use \Magento\Framework\DataObject\IdentityInterface;
use \Magento\Framework\Model\AbstractModel;

class Post extends AbstractModel implements IdentityInterface, PostInterface {
	const CACHE_TAG = 'AHT_CRUD2_post';

	protected $_cacheTag = 'AHT_CRUD2_post';

	protected $_eventPrefix = 'AHT_CRUD2_post';

	protected function _construct() {
		$this->_init('AHT\Blog\Model\ResourceModel\Post');
	}

	public function getIdentities() {
		return [self::CACHE_TAG.'_'.$this->getId()];
	}

	public function getDefaultValues() {
		$values = [];

		return $values;
	}
}
