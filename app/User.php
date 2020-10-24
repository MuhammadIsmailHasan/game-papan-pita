<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use OwenIt\Auditing\Contracts\Auditable;

class User extends Authenticatable implements Auditable
{
    use Notifiable, HasRoles;
    use \OwenIt\Auditing\Auditable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'kelas', 'sekolah', 'person_type'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];

    public function nilai() 
    {
        return $this->hasMany('App\Nilai');
    }

    public function angket() 
    {
        return $this->hasMany('App\Angket');
    }

    public function querySearch($filter)
    {
        $query = $this->newQuery();

        if (isset($filter['id'])) {
            $query->where('id', $filter['id']);
        }
        if (isset($filter['person_type'])) {
            $query->where('person_type', 'like', '%' . $filter['person_type'] . '%');
        }
        if (isset($filter['name'])) {
            $query->where('name', 'like', '%' . $filter['name'] . '%');
        }
        if (isset($filter['status_materi_1'])) {
            $query->where('status_materi_1', $filter['status_materi_1']);
        }
        if (isset($filter['status_materi_2'])) {
            $query->where('status_materi_2', $filter['status_materi_2']);
        }
        if (isset($filter['status_level_1'])) {
            $query->where('status_level_1', $filter['status_level_1']);
        }
        if (isset($filter['status_level_2'])) {
            $query->where('status_level_2', $filter['status_level_2']);
        }
        if (isset($filter['status'])) {
            $query->where('status', $filter['status']);
        }
        return $query;
    }
    
}
