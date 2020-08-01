@extends('layouts.app')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Ubah Data Siswa</h1>
    <div class="card shadow">
        <div class="card-body">
            <form method="post" action="/admin/edit_siswa/proses/{{ $siswa->id }}">
                {{ csrf_field() }}
                {{ method_field('PUT') }}

                <div class="row">
                    <div class="col-6">
                        <div class="form-group row">
                            <label class="col-3 col-form-label">Nama</label>
                            <input type="text" class="form-control col-9" name="name" aria-describedby="helpId"
                                placeholder="Masukkan Nama" required value="{{ $siswa->name }}">
                            <small id="helpId" class="form-text text-muted"></small>
                        </div>
                        <div class="form-group row">
                            <label class="col-3 col-form-label">Username</label>
                            <input type="text" class="form-control col-9" name="username" aria-describedby="helpId"
                                placeholder="Masukkan Username" required value="{{ $siswa->username }}">
                            <small id="helpId" class="form-text text-muted"></small>
                        </div>
                        <div class="form-group row">
                            <label class="col-3 col-form-label">Email</label>
                            <input type="text" class="form-control col-9" name="email" aria-describedby="helpId"
                                placeholder="Masukkan Email" required value="{{ $siswa->email }}">
                            <small id="helpId" class="form-text text-muted"></small>
                        </div>
                        <div class="form-group row">
                            <label class="col-3 col-form-label">Jenis Kelamin</label>
                            <select class="custom-select col-9" name="jenis_kelamin">
                                <option>--Pilih Jenis Kelamin--</option>
                                @if($siswa->siswa->jenis_kelamin == null)
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                                @endif

                                @if($siswa->siswa->jenis_kelamin == 'L')
                                <option value="L" selected>Laki-laki</option>
                                <option value="P">Perempuan</option>
                                @endif

                                @if($siswa->siswa->jenis_kelamin == 'P')
                                <option value="L">Laki-laki</option>
                                <option value="P" selected>Perempuan</option>
                                @endif
                            </select>
                        </div>

                        <div class="form-group row">
                            <label class="col-3 col-form-label">Nama Orang Tua</label>
                            <input type="text" class="form-control col-9" name="orang_tua" aria-describedby="helpId"
                                placeholder="Masukkan Nama Orang Tua Siswa" required
                                value="{{ $siswa->siswa->orang_tua }}">
                            <small id="helpId" class="form-text text-muted"></small>
                        </div>

                        <div class="form-group row">
                            <label class="col-3 col-form-label">Alamat</label>
                            <textarea class="form-control col-9" name="alamat"
                                rows="3">{{ $siswa->siswa->alamat }}</textarea>
                        </div>

                        <div class="form-group row">
                            <label class="col-3 col-form-label">No HP</label>
                            <input type="text" class="form-control col-9" name="telepon" aria-describedby="helpId"
                                placeholder="Masukkan No Hp" value="{{ $siswa->siswa->telepon }}">
                            <small id="helpId" class="form-text text-muted"></small>
                        </div>

                        <div class="form-group row">
                            <label class="col-3 col-form-label">Tahun Masuk</label>
                            <select class="custom-select col-9" name="tahun_masuk">
                                @if($siswa->siswa->tahun_masuk>0)
                                    <option value="{{ $siswa->siswa->tahun_masuk }}">{{ $siswa->siswa->tahun_masuk }}</option>
                                    <option>--Pilih Tahun Masuk--</option>
                                    {{ $year = date('Y') }}

                                    @for ($i = $year; $i >= 2000; $i--)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                @endif
                                @if($siswa->siswa->tahun_masuk == null)
                                    <option>--Pilih Tahun Masuk--</option>
                                    {{ $year = date('Y') }}

                                    @for ($i = $year; $i >= 2000; $i--)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                @endif

                            </select>
                        </div>

                        <div class="form-group row">
                            <label class="col-3 col-form-label">Program</label>
                            <select class="custom-select col-9" name="program">
                                <option>--Pilih Program--</option>
                                @if($siswa->siswa->program == 'FSRD')
                                <option value="FSRD" selected>FSRD</option>
                                <option value="Arsitektur">Arsitektur</option>
                                @endif
                                @if($siswa->siswa->program == 'Arsitektur')
                                <option value="FSRD" selected>FSRD</option>
                                <option value="Arsitektur">Arsitektur</option>
                                @endif
                                @if($siswa->siswa->program == null)
                                <option value="FSRD">FSRD</option>
                                <option value="Arsitektur">Arsitektur</option>
                                @endif
                            </select>
                        </div>

                        <div class="form-group">
                            <input class="btn btn-success" type="submit" value="Edit Data Siswa">
                            <a href="/admin/siswa" class="btn btn-danger">Kembali</a>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>

    @yield('content')


</div>
<!-- /.container-fluid -->
@endsection
