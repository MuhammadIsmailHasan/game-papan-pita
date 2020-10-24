@extends('layouts.frontend')

@section('content')
    <section id="profile" style="padding: 100px 30px 30px 30px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center" style="margin-top: 20px;">
                    <h2>NILAI TERTINGGI</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    {!! Form::open(['method' => 'GET', 'url' => 'nilai-tertinggi', 'class' => 'form-horizontal', 'id'=>'form_pencarian', 'role' => 'search'])  !!}
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
                        <h4 class="header-title m-t-0 m-b-10">5 Nilai Tertinggi</h4>
                        <div class="table-responsive">
                            <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap ">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Siswa</th>
                                        <th>Permainan</th>
                                        <th>Skor</th>
                                        <th>Sebutan</th>
                                        <th>Tanggal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $value)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $value->user->name }}</td>
                                            <td>Ronde {{ $value->ronde }}</td>
                                            <td>{{ $value->skor }}</td>
                                            <td>{{ $value->sebutan }}</td>
                                            <td>{{ $value->tanggal }}</td>
                                        </tr>
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
<script type="text/javascript">
    $(document).ready(function() {
    });
    
</script>
@endsection