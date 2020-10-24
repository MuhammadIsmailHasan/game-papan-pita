@extends('layouts.frontend')

@section('content')
    <section id="profile" style="padding: 100px 30px 30px 30px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center" style="margin-top: 20px;">
                    <h2>DAFTAR NILAI</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    {!! Form::open(['method' => 'GET', 'url' => 'nilai', 'class' => 'form-horizontal', 'id'=>'form_pencarian', 'role' => 'search'])  !!}
                        <div class="form-group">
                            <label class="col-md-2 control-label">Berdasarkan Permainan</label>
                            <div class="col-md-3">
                                <select name="search_ronde" id="search_ronde" class="form-control">
                                    <option value="0">All</option>
                                    <option value="1">Ronde 1</option>
                                    <option value="2">Ronde 2</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <button id="btn_cari" class="btn btn-success waves-effect waves-light" type="submit">
                                    Cari Data
                                </button>
                                <button id="btn_batal" type="reset" class="btn btn-default waves-effect waves-light m-l-5">
                                    Batal
                                </button>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div><!-- end col -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="custom-card">
                        <div class="row">
                            <div class="col-md-10">
                                <h4 class="header-title m-t-0 m-b-10">Daftar Nilai Siswa</h4>
                            </div>
                            <div class="col-md-2">
                                <a href="{{ route('nilai-export', $ronde_type) }}" type="button" class="btn btn-success" style="float: right">
                                    <i class="fa fa-print"></i>  Export Excel
                                </a>
                            </div>
                        </div>
                        <hr>
                        <div class="table-responsive">
                            <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap ">
                                <thead>
                                    <tr>
                                        <th style="width: 5%;">No.</th>
                                        <th style="width: 35%;">Nama Siswa</th>
                                        <th>Permainan</th>
                                        <th>Skor</th>
                                        <th>Sebutan</th>
                                        <th>Tanggal</th>
                                        <th>Status</th>
                                        <th style="width: 2%;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $value)
                                        @if ($value->user->status == 1)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $value->user->name }}</td>
                                                <td>Ronde {{ $value->ronde }}</td>
                                                <td>{{ $value->skor }}</td>
                                                <td>{{ $value->sebutan }}</td>
                                                <td>{{ $value->tanggal }}</td>
                                                <td>
                                                    @if ($value->status == 1)
                                                        <span class="badge badge-success">Aktif</span>
                                                    @else
                                                        <span>Non Aktif</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($value->status == 1)
                                                        <a href="{{ route('nilai-delete', $value->id) }}" class="btn btn-danger btn-sm tombol-hapus">
                                                            <i class="fa fa-trash"></i>
                                                        </a>
                                                    @else
                                                        <form action="{{ route('nilai.update', $value->id) }}" method="POST" >
                                                            @csrf
                                                            @method('PUT')
                                                            <input type="hidden" name="status" value="1">
                                                            <button class="btn btn-primary btn-sm" type="submit"><i class="fa fa-check"></i></button>
                                                        </form>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    @if (Session::has('success'))
        <script type="text/javascript">
            Swal.fire(
                'Berhasil',
                "{{ Session::get('success') }}",
                'success'
                )
        </script>
    @endif
    @if (Session::has('error'))
        <script type="text/javascript">
            Swal.fire({
                icon: 'error',
                title: 'Gagal',
                text: '{{ Html::ul($errors->all()) }}',
                })
        </script>
    @endif

    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatable').dataTable();
        });
        
    </script>
@endsection