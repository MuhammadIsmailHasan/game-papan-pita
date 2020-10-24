<?php

namespace App\Libs\Services;

use App\Siswa;
use App\Libs\Contracts\SiswaContract;
use Illuminate\Database\Eloquent\Collection;

class SiswaService implements SiswaContract
{
    private $model;

    public function __construct(Siswa $model)
    {
        $this->model = $model;
    }

    /**
     * [createSiswa description]
     * @param  array  $data [description]
     */
    public function create(array $data) 
    {
    	return $this->model->create($data); 

    } 

    public function update(array $data, int $id) : void
    {
        $this->model->where('id', $id)->update($data);

    }
    
    public function get(array $filter)
    {
        return $this->model->querySearch($filter)->get();
    }
    
}
