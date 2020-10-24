<?php

namespace App\Libs\Services;

use App\Nilai;
use App\Libs\Contracts\NilaiContract;
use Illuminate\Database\Eloquent\Collection;

class NilaiService implements NilaiContract
{
    private $model;

    public function __construct(Nilai $model)
    {
        $this->model = $model;
    }

    /**
     * [createNilai description]
     * @param  array  $data [description]
     */
    public function create(array $data) 
    {
    	return $this->model->create($data); 

    } 

    public function paginate(array $filter, int $limit)
    {
        return $this->model->querySearch($filter)->paginate($limit);
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
