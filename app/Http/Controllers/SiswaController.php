<?php

namespace App\Http\Controllers;

use App\Libs\Services\NilaiService;
use App\Libs\Services\SiswaService;
use App\Libs\Services\UserService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class SiswaController extends Controller
{
    protected $path = 'siswa';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(UserService $userService)
    {
        $filter = [
            'person_type' => 'siswa',
            'status' => 1,
        ];

        $siswa = $userService->getUser($filter);
        
        foreach ($siswa as $key => $value) {
            $value['tanggal'] = Carbon::createFromFormat('Y-m-d H:i:s', $value->created_at)
                            ->format('d-m-Y');
        }

        return view($this->path . '.index', [
            'data' => $siswa
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, UserService $userService, NilaiService $nilaiService)
    {
        $data = $userService->getUser(['id' => $id])->first();
        DB::transaction(function () use (&$id, &$data, $userService, $nilaiService) {

            $user = $userService->updateUser([
                'status' => 0,
                'status_materi' => 0,
                'status_ronde_1' => 0,
                'status_ronde_2' => 0
            ], $id);

            foreach ($data->nilai as $key => $value) {
                $nilaiService->update(['status' => 0], $value->id);
            }
        });

        return Redirect::to($this->path)->withSuccess('Berhasil Menghapus Siswa, Akun dan Nilainya');
    }
}
