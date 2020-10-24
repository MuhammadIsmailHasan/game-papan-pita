<?php

namespace App\Libs\Contracts;

interface UserContract
{
    public function createUser(array $data);

	public function getUser(array $filter);

	public function paginateUser(array $filter, int $limit);
	
    public function updateUser(array $data, int $id);
}