<!DOCTYPE html>
@extends('master2')

@section('title', 'Data meja')

@section('konten')
<head>
	<title>,</title>
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
	<h3>Edit Meja</h3>

	<a href="/meja" class="btn btn-secondary"> Kembali</a>

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
		@foreach($meja as $p)
		<tr>
			<td>{{ $p->meja_nama }}</td>
			<td>{{ $p->meja_jabatan }}</td>
			<td>{{ $p->meja_umur }}</td>
			<td>{{ $p->meja_alamat }}</td>
			<td>
                <a href="/meja/viewmeja/{{ $p->meja_id }}" class="btn btn-success">View</a>
				|
				<a href="/meja/edit/{{ $p->meja_id }}" class="btn btn-warning">Edit</a>
				|
				<a href="/meja/hapus/{{ $p->meja_id }}" class="btn btn-danger"> Hapus</a>
			</td>
		</tr>
		@endforeach
	</table> --}}

    <table>
        @foreach($meja as $b)
          <form action="/meja/update" method="post">
            {{ csrf_field() }}
            <tr>
              <td><input type="hidden" name="id" value="{{ $b->kodemeja }}"></td>
            </tr>
            <tr>
              <td><label for="merkmeja" class="col-xs-3 col-form-label mr-2">Merk Meja</label></td>
              <td><input type="text" class="form-control" required="required" name="merkmeja" value="{{ $b->merkmeja }}"></td>
            </tr>
            <tr>
              <td><label for="stockmeja" class="col-xs-3 col-form-label mr-2">Stock</label></td>
              <td><input type="number" class="form-control" required="required" name="stockmeja" value="{{ $b->stockmeja }}"></td>
            </tr>
            <tr>
              <td><label for="umur" class="col-xs-3 col-form-label mr-2">Umur</label></td>
              <td><input type="text" class="form-control" required="required" name="tersedia" value="{{ $b->tersedia }}"></td>
            </tr>
            {{-- <tr>
              <td><label for="alamat" class="col-xs-3 col-form-label mr-2">Alamat</label></td>
              <td><textarea required="required" class="form-control" name="alamat">{{ $b->meja_alamat }}</textarea></td>
            </tr>
            <tr> --}}
              <td></td>
              <td><input type="submit" value="Simpan Data" class="btn btn-success"></td>
            </tr>
          </form>
        @endforeach
        </table>
</body>
@endsection
