<?php

namespace AHT\Blog\Api;

interface PostRepositoryInterface {
	public function save(\AHT\Blog\Api\Data\PostInterface $Post);

	public function getById($PostId);

	public function delete(\AHT\Blog\Api\Data\PostInterface $Post);

	public function deleteById($PostId);
}
