<?php

namespace App\Libs\Contracts;

interface NilaiContract
{
    public function create(array $data);

    public function paginate(array $filter, int $limit);
	
    public function update(array $data, int $id);

    public function get(array $filter);
}