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
	{{-- <h2><a>www.malasngoding.com</a></h2> --}}
	<h3>Tambah Pembelian</h3>

	<a class="btn btn-secondary" href="/keranjangbelanja" > Kembali</a>

	<br/>
	<br/>

	{{-- <form action="/keranjangbelanja/storebeli" method="post" class="form-horizontal">
		{{ csrf_field() }}


        <div class="form-group row">
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

        </div>
		<tr>
            <td><label for="id" class="col-xs-3 col-form-label mr-2">Kode Pembelian</label></td>
            <td><input type="number" class="form-control" id="id" name="id"></td>
          </tr>
          <tr>
            <td><label for="kode" class="col-xs-3 col-form-label mr-2">Kode Barang</label></td>
            <td><input type="number" class="form-control" id="kode" name="kode"></td>
          </tr>
          <tr>
            <td><label for="jumlah" class="col-xs-3 col-form-label mr-2">Jumlah</label></td>
            <td><input type="number" class="form-control" id="jumlah" name="jumlah"></td>
          </tr>
          <tr>
            <td><label for="harga" class="col-xs-3 col-form-label mr-2">Harga</label></td>
            <td><input type="number" class="form-control" id="harga" name="harga"></td>
          </tr>
          <br/>
          <tr>
            <td></td>
            <td><input type="submit" value="Simpan Data" class="btn btn-success"></td>
          </tr>
	</form> --}}

    <form action="/keranjangbelanja/storebeli" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group row">
            <label class="control-label col-sm-2 align-right">Kode Barang:</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" name="kode" placeholder="Masukkan kode barang">
            </div>
          </div>
        <div class="form-group row">
            <label class="control-label col-sm-2 align-right" >Jumlah:</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" name="jumlah" placeholder="Masukkan jumlah barang">
            </div>
          </div>
        <div class="form-group row">
            <label class="control-label col-sm-2 align-right" >Harga:</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" name="harga" placeholder="Masukkan harga barang">
            </div>
          </div>
          <div class="form-group row">
            <div class="control-label col-sm-2 align-right" ></div>
            <div class="col-sm-10">
                <input class="btn btn-success" type="submit" value="Beli">
            </div>
          </div>
	</form>

@endsection
