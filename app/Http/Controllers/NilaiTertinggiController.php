<?php

namespace App\Http\Controllers;

use App\Libs\Services\NilaiService;
use Carbon\Carbon;
use Illuminate\Http\Request;

class NilaiTertinggiController extends Controller
{
    protected $path = 'nilai-tertinggi';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, NilaiService $nilaiService)
    {
        $filter = [];
        if ($request->has('search_ronde')) {
            if ($request->search_ronde != 0) {
                $filter['ronde'] = $request->search_ronde;
            }
        }

        $filter['order_by_desc'] = 'skor';
        $filter['status'] = 1;
        $nilai = $nilaiService->paginate($filter, 5);
        
        foreach ($nilai as $key => $value) {
            $value['tanggal'] = Carbon::createFromFormat('Y-m-d H:i:s', $value->created_at)
                            ->format('d-m-Y H:i');
        }

        return view($this->path . '.index', [
            'data' => $nilai
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
    public function destroy($id)
    {
        //
    }
}
