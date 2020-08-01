@extends('layouts.app')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Daftar Siswa</h1>
    <div class="card shadow">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Jenis Kelamin</th>
                            <th>No. Hp/Telepon</th>
                            <th>Tahun Masuk</th>
                            <th>Program</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($siswa as $key => $s)
                        <tr>
                            <td>{{ $s->name }}</td>
                            <td>{{ $s->email }}</td>
                            <td>{{ $s->siswa->jenis_kelamin }}</td>
                            <td>{{ $s->siswa->telepon }}</td>
                            <td>{{ $s->siswa->tahun_masuk }}</td>
                            <td>{{ $s->siswa->program }}</td>
                            <td>
                                <a href="/admin/siswa_edit/{{ $s->id }}" class="btn btn-primary">Edit</a>
                                <a href="/admin/siswa_hapus/{{ $s->id }}" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @yield('content')


</div>
<!-- /.container-fluid -->
@endsection
