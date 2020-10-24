<?php

namespace App\Libs\Contracts;

interface SiswaContract
{
    public function create(array $data);
	
    public function update(array $data, int $id);

    public function get(array $filter);
}