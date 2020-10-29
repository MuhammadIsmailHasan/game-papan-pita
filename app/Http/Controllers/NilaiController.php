<?php

namespace App\Http\Controllers;

use App\Exports\NilaiExport;
use App\Libs\Services\NilaiService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Maatwebsite\Excel\Facades\Excel;

class NilaiController extends Controller
{
    protected $path = 'nilai';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, NilaiService $nilaiService)
    {
        $filter = [];

        $level = 0;
        if ($request->has('search_level')) {
            if ($request->search_level != 0) {
                $filter['level'] = $request->search_level;
                $level = $request->search_level;
            }
        }

        $nilai = $nilaiService->get($filter);
        
        foreach ($nilai as $key => $value) {
            $value['tanggal'] = Carbon::createFromFormat('Y-m-d H:i:s', $value->created_at)
                        ->format('d-m-Y H:i');
        }

        return view($this->path . '.index', [
            'data' => $nilai,
            'level_type' => $level
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
    public function update(Request $request, $id, NilaiService $nilaiService)
    {
        $data = $request->except(['_token', '_method']);
        
        $nilai = $nilaiService->update($data, $id);

        return redirect('/nilai');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, NilaiService $nilaiService)
    {
        $nilai = $nilaiService->update(['status' => 0], $id);

        return Redirect::to($this->path)->withSuccess('Berhasil Menonaktifkan Nilai');
    }

    public function export($jenisLevel, nilaiService $nilaiService) 
    {
        $date = Carbon::now()->format('d-m-Y');
        $filter = [
            'status' => 1
        ];

        if ($jenisLevel != 0) {
            $filter['level'] = $jenisLevel;
        }

        $nilai = $nilaiService->get($filter);
        foreach ($nilai as $key => $value) {
            $value['tanggal'] = Carbon::createFromFormat('Y-m-d H:i:s', $value->created_at)
                ->format('d-m-Y H:i:s');
        }

        return Excel::download(new NilaiExport($nilai), "Export Nilai_" .$date. ".xlsx");
    }
}
