@extends('layouts.frontend')

@section('content')
    <section id="profile" style="padding: 100px 30px 30px 30px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center" style="margin-top: 20px;">
                    <h2>PROFIL</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="custom-card">
                        <h4 class="header-title m-t-0 m-b-30">Profile User</h4>
        
                        <form id="form_show" class="form-horizontal" method="post" action="#">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Nama Lengkap</label>
                                <div class="col-md-6">
                                    <input type="text" id="nama" name="nama" class="form-control" value="{{ $data->name }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Kelas</label>
                                <div class="col-md-6">
                                    <input type="text" id="kelas" name="kelas" class="form-control" value="{{ $data->kelas }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Sekolah</label>
                                <div class="col-md-6">
                                    <input type="text" id="sekolah" name="sekolah" class="form-control" value="{{ $data->sekolah }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Status Materi</label>
                                <div class="col-md-6">
                                    <input type="text" id="status" name="status" class="form-control"
                                    value="{{ $data->status == 1 ? 'Sudah Selesai' : 'Belum Selesai'}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Status Ronde 1</label>
                                <div class="col-md-6">
                                    <input type="text" name="status" class="form-control"
                                    value="{{ $data->status_ronde_1 == 1 ? 'Sudah Selesai' : 'Belum Selesai'}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Status Ronde 2</label>
                                <div class="col-md-6">
                                    <input type="text" name="status" class="form-control"
                                    value="{{ $data->status_ronde_2 == 1 ? 'Sudah Selesai' : 'Belum Selesai'}}">
                                </div>
                            </div>
                        </form>
        
                        <h4 class="header-title m-t-0 m-b-10">Daftar Nilai</h4>
                        <div class="table-responsive">
                            <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap ">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Permainan</th>
                                        <th>Skor</th>
                                        <th>Sebutan Nilai</th>
                                        <th>Tanggal</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data->nilai as $value)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>Ronde {{ $value->ronde }}</td>
                                            <td>{{ $value->skor }}</td>
                                            <td>{{ $value->sebutan }}</td>
                                            <td>{{ $value->tanggal }}</td>
                                            <td>{{ $value->status == 0 ? 'Dihapus Admin' : 'Aktif' }}</td>
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
        $("#form_show :input").prop("disabled", true);
    });
</script>
@endsection