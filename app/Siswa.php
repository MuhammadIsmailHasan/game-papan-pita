<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    // protected $guarded = [];

    // public function user() 
    // {
    //     return $this->morphOne('App\User', 'person');
    // }

    // public function nilai() 
    // {
    //     return $this->hasMany('App\Nilai');
    // }

    // public function angket()
    // {
    //     return $this->hasMany('App\Angket');
    // }

    // public function querySearch($filter)
    // {
    //     $query = $this->newQuery();

    //     if (isset($filter['id'])) {
    //         $query->where('id', $filter['id']);
    //     }
    //     if (isset($filter['status'])) {
    //         $query->where('status', $filter['status']);
    //     }
    //     if (isset($filter['nama'])) {
    //         $query->where('nama', 'like', '%' . $filter['nama'] . '%');
    //     }
    //     return $query;
    // }
}
