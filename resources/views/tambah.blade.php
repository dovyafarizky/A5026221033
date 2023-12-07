<!DOCTYPE html>
<style>
    table {
      width: 100%;
      border-collapse: collapse;
    }

    td {
      padding: 10px;
    }

    input, textarea {
      width: 100%;
      padding: 5px;
      box-sizing: border-box;
    }
    </style>
@extends('master2')

@section('title', 'Data Pegawai')

@section('konten')
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Pegawai</h3>

	<a class="btn btn-secondary" href="/pegawai" > Kembali</a>

	<br/>
	<br/>

	<form action="/pegawai/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        {{-- <div class="form-group row">
            <label for="nama" class="col-xs-3 col-form-label mr-2">Nama</label>
            <div class="col-xs-9">
            <input type="text" class="form-control" id="nama" name="nama">
            </div>

        </div>
        <div class="form-group row">
            <label for="jabatan" class="col-xs-3 col-form-label mr-2">Jabatan</label>
            <div class="col-xs-9">
            <input type="text" class="form-control" id="jabatan" name="jabatan">
            </div>

        </div>
        <div class="form-group row">
            <label for="umur" class="col-xs-3 col-form-label mr-2">Umur</label>
            <div class="col-xs-9">
            <input type="text" class="form-control" id="umur" name="umur">
            </div>

        </div>
        <div class="form-group row">
            <label for="alamat" class="col-xs-3 col-form-label mr-2">Alamat</label>
            <div class="col-xs-9">
            <input type="text" class="form-control" id="alamat" name="alamat">
            </div>

        </div> --}}
		<tr>
            <td><label for="nama" class="col-xs-3 col-form-label mr-2">Nama</label></td>
            <td><input type="text" class="form-control" id="nama" name="nama"></td>
          </tr>
          <tr>
            <td><label for="jabatan" class="col-xs-3 col-form-label mr-2">Jabatan</label></td>
            <td><input type="text" class="form-control" id="jabatan" name="jabatan"></td>
          </tr>
          <tr>
            <td><label for="umur" class="col-xs-3 col-form-label mr-2">Umur</label></td>
            <td><input type="text" class="form-control" id="umur" name="umur"></td>
          </tr>
          <tr>
            <td><label for="alamat" class="col-xs-3 col-form-label mr-2">Alamat</label></td>
            <td><input type="textarea" class="form-control" id="alamat" name="alamat"></td>
          </tr>
          <br/>
          <tr>
            <td></td>
            <td><input type="submit" value="Simpan Data" class="btn btn-success"></td>
          </tr>
	</form>
@endsection
