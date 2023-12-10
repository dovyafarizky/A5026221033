<!DOCTYPE html>
@extends('master2')

@section('title', 'Data Pegawai')

@section('konten')
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
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
</head>
<body>

	{{-- <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2> --}}
	<h3>Edit Pegawai</h3>

	<a href="/pegawai" class="btn btn-secondary"> Kembali</a>

	<br/>
	<br/>


    {{-- <table class="table table-striped table-hover">
		<tr>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
                <a href="/pegawai/viewpegawai/{{ $p->pegawai_id }}" class="btn btn-success">View</a>
				|
				<a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-warning">Edit</a>
				|
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger"> Hapus</a>
			</td>
		</tr>
		@endforeach
	</table> --}}

    <table>
        @foreach($pegawai as $p)
          <form action="/pegawai/update" method="post">
            {{ csrf_field() }}
            <tr>
              <td><input type="hidden" name="id" value="{{ $p->pegawai_id }}"></td>
            </tr>
            <tr>
              <td><label for="nama" class="col-xs-3 col-form-label mr-2">Nama</label></td>
              <td><input type="text" class="form-control" required="required" name="nama" value="{{ $p->pegawai_nama }}"></td>
            </tr>
            <tr>
              <td><label for="jabatan" class="col-xs-3 col-form-label mr-2">Jabatan</label></td>
              <td><input type="text" class="form-control" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}"></td>
            </tr>
            <tr>
              <td><label for="umur" class="col-xs-3 col-form-label mr-2">Umur</label></td>
              <td><input type="number" class="form-control" required="required" name="umur" value="{{ $p->pegawai_umur }}"></td>
            </tr>
            <tr>
              <td><label for="alamat" class="col-xs-3 col-form-label mr-2">Alamat</label></td>
              <td><textarea required="required" class="form-control" name="alamat">{{ $p->pegawai_alamat }}</textarea></td>
            </tr>
            <tr>
              <td></td>
              <td><input type="submit" value="Simpan Data" class="btn btn-success"></td>
            </tr>
          </form>
        @endforeach
        </table>
</body>
@endsection
