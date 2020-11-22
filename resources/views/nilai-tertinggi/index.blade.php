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
                            <label class="col-md-2 control-label">Berdasarkan Quiz</label>
                            <div class="col-md-3">
                                <select name="search_level" id="search_level" class="form-control">
                                    <option value="0">All</option>
                                    <option value="1">Level 1</option>
                                    <option value="2">Level 2</option>
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
                            <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Siswa</th>
                                        <th>Quiz</th>
                                        <th>Skor</th>
                                        <th>Sebutan Skor</th>
                                        <th>Tanggal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $value)
                                        <tr>
                                            <td width="5%">{{ $loop->iteration }}</td>
                                            <td width="35%">{{ $value->user->name }}</td>
                                            <td>Level {{ $value->level }}</td>
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