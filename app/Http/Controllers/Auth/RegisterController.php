<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use App\Libs\Services\SiswaService;
use App\Libs\Services\UserService;
use App\Siswa;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/materi/1';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name_data' => ['required', 'string', 'max:255'],
            'kelas_data' => ['required', 'integer', 'max:255'],
            'sekolah_data' => ['required', 'string', 'max:255'], 
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */

    protected function create(array $data)
    {
        $user = new User;

        $user = User::create([
            'name' => strtoupper($data['name_data']),
            'kelas' => $data['kelas_data'],
            'sekolah' => strtoupper($data['sekolah_data']),
            'person_type' => 'siswa',
            'password' => Hash::make('123456'),
        ]);

        $user->assignRole(config('rolepermission.roles.siswa.name'));

        return $user;
    }
}
