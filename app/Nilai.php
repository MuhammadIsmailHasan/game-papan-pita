<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    protected $guarded = [];

    public function user() 
    {
        return $this->belongsTo('App\User');
    }

    public function querySearch($filter)
    {
        $query = $this->newQuery();

        if (isset($filter['id'])) {
            $query->where('id', $filter['id']);
        }
        if (isset($filter['user_id'])) {
            $query->where('user_id', $filter['user_id']);
        }
        if (isset($filter['level'])) {
            $query->where('level', $filter['level']);
        }
        if (isset($filter['skor'])) {
            $query->where('skor', $filter['skor']);
        }
        if (isset($filter['sebutan'])) {
            $query->where('sebutan', 'like', '%' . $filter['sebutan'] . '%');
        }
        if (isset($filter['status'])) {
            $query->where('status', $filter['status']);
        }
        if (isset($filter['order_by_desc'])) {
            $query->orderBy($filter['order_by_desc'], 'desc');
        }
        return $query;
    }
}
