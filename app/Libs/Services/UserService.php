<?php

namespace App\Libs\Services;

use App\User;
use App\Libs\Contracts\UserContract;
use Illuminate\Database\Eloquent\Collection;

class UserService implements UserContract
{
    private $model;

    public function __construct(User $model)
    {
        $this->model = $model;
    }
    
    public function createUser(array $data)
    {
        return $this->model->create($data);
    }

    public function getUser(array $filter)
    {
        return $this->model->querySearch($filter)->get();
    }

    public function paginateUser(array $filter, int $limit)
    {
        return $this->model->querySearch($filter)->paginate($limit);
    }

    public function updateUser(array $data, int $id)
    {
        return $this->model->where('id', $id)->update($data);
    }
}
