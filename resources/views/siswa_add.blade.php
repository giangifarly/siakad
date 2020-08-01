@extends('layouts.app')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Tambah Siswa</h1>
	<div class="card shadow">
		<div class="card-body">
			<form method="post" action="/admin/tambah_siswa/proses">
				{{ csrf_field() }}
				<div class="row">
					<div class="col-6">
						<div class="form-group row">
							<label class="col-3 col-form-label">Nama</label>
							<input type="text" class="form-control col-9" name="name" aria-describedby="helpId"
								placeholder="Masukkan Nama" required>
							<small id="helpId" class="form-text text-muted"></small>
                        </div>
                        <div class="form-group row">
							<label class="col-3 col-form-label">Username</label>
							<input type="text" class="form-control col-9" name="username" aria-describedby="helpId"
								placeholder="Masukkan Username" required>
							<small id="helpId" class="form-text text-muted"></small>
                        </div>
                        <div class="form-group row">
							<label class="col-3 col-form-label">Password</label>
							<input type="password" class="form-control col-9" name="password" aria-describedby="helpId"
								placeholder="Masukkan Password (Boleh kosong). Default 123456">
							<small id="helpId" class="form-text text-muted"></small>
						</div>
						<div class="form-group row">
							<label class="col-3 col-form-label">Email</label>
							<input type="text" class="form-control col-9" name="email" aria-describedby="helpId"
								placeholder="Masukkan Email" required>
							<small id="helpId" class="form-text text-muted"></small>
						</div>
						<div class="form-group row">
							<label class="col-3 col-form-label">Jenis Kelamin</label>
							<select class="custom-select col-9" name="jenis_kelamin">
								<option>--Pilih Jenis Kelamin--</option>
								<option value="L">Laki-laki</option>
								<option value="P">Perempuan</option>
							</select>
						</div>

						<div class="form-group row">
							<label class="col-3 col-form-label">Nama Orang Tua</label>
							<input type="text" class="form-control col-9" name="orang_tua" aria-describedby="helpId"
								placeholder="Masukkan Nama Orang Tua Siswa" required>
							<small id="helpId" class="form-text text-muted"></small>
                        </div>

                        <div class="form-group row">
                            <label class="col-3 col-form-label">Alamat</label>
                            <textarea class="form-control col-9" name="alamat" rows="3"></textarea>
                        </div>

                        <div class="form-group row">
							<label class="col-3 col-form-label">No HP</label>
							<input type="text" class="form-control col-9" name="telepon" aria-describedby="helpId"
								placeholder="Masukkan No Hp">
							<small id="helpId" class="form-text text-muted"></small>
                        </div>

                        <div class="form-group row">
							<label class="col-3 col-form-label">Tahun Masuk</label>
							<select class="custom-select col-9" name="tahun_masuk">
                                <option>--Pilih Tahun Masuk--</option>
                                {{ $year = date('Y') }}

                                @for ($i = $year; $i >= 2000; $i--)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endfor

							</select>
                        </div>

                        <div class="form-group row">
							<label class="col-3 col-form-label">Program</label>
							<select class="custom-select col-9" name="program">
								<option>--Pilih Program--</option>
								<option value="FSRD">FSRD</option>
								<option value="Arsitektur">Arsitektur</option>
							</select>
                        </div>

                        <div class="form-group">
                            <input class="btn btn-success" type="submit" value="Tambahkan Siswa">
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
