<?php

namespace App\Http\Controllers\Api;

use App\Libs\Services\NilaiService;
use App\Libs\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Libs\Traits\SetSebutan;
use App\Nilai;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class NilaiController extends Controller
{
    use SetSebutan;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request, UserService $userService, NilaiService $nilaiService)
    {
        $status = false;
        $msg = "";
        $data = $request->except('user_id');
        $userId = $request->user_id;

        $data['sebutan'] = $this->SetSebutan($request->skor);
        $response = [
            'sebutan' => $data['sebutan'],
            'skor' => $request->skor
        ];

        DB::transaction(function () use (&$data, &$userId, $userService, $nilaiService){
            if ($data['level'] == 1) {
                $userService->updateUser(['status_level_1' => 1], $userId);
            } else {
                $userService->updateUser(['status_level_2' => 1], $userId);
            }

            $data['user_id'] = $userId;
            $nilai = $nilaiService->create($data);

            $status = true;
            $msg = "Berhasil Update Data";
        });

        return response()->json([
            'status' => true,
            'data' => $response,
            'msg' => $msg
        ]);
        
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
    public function destroy($id)
    {
        //
    }
}
