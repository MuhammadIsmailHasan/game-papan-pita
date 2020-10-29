@extends('layouts.frontend')

@section('content')
    <section id="profile" style="padding: 100px 30px 30px 30px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center" style="margin-top: 20px;">
                    <h2>DAFTAR SISWA</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="custom-card">
                        <div class="table-responsive">
                            <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap ">
                                <thead>
                                    <tr>
                                        <th style="width: 5%;">No.</th>
                                        <th style="width: 40%;">Nama Siswa</th>
                                        <th>Status Materi Perkalian</th>
                                        <th>Status Materi Papan Pita</th>
                                        <th>Status Quiz Level 1</th>
                                        <th>Status Quiz Level 2</th>
                                        <th style="width: 2%;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $value)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $value->name }}</td>
                                            <td>{{ $value->status_materi_1 == 1 ? 'Sudah Selesai' : 'Belum Selesai' }}</td>
                                            <td>{{ $value->status_materi_2 == 1 ? 'Sudah Selesai' : 'Belum Selesai' }}</td>
                                            <td>{{ $value->status_level_1 == 1 ? 'Sudah Selesai' : 'Belum Selesai' }}</td>
                                            <td>{{ $value->status_level_2 == 1 ? 'Sudah Selesai' : 'Belum Selesai' }}</td>
                                            <td>
                                                <a href="{{ route('siswa-delete', $value->id) }}" class="btn btn-danger btn-sm tombol-hapus">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </td>
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