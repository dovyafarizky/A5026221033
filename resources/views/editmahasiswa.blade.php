
@extends('master2')

@section('title', 'Data mahasiswa')

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
	<h3>Edit Data Mahasiswa</h3>

	<a href="/mahasiswa" class="btn btn-secondary"> Kembali</a>

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
        @foreach($mahasiswa as $b)
          <form action="/mahasiswa/update" method="post">
            {{ csrf_field() }}
            <tr>
              <td><input type="hidden" name="id" value="{{ $b->NRP }}"></td>
            </tr>
            <tr>
                <td><label for="NRP" class="col-xs-3 col-form-label mr-2">NRP:</label></td>
                <td><input type="text" class="form-control" required="required" name="nrp" value="{{ $b->NRP }}"></td>
              </tr>
            <tr>
              <td><label for="Nama" class="col-xs-3 col-form-label mr-2">Nama:</label></td>
              <td><input type="text" class="form-control" required="required" name="nama" value="{{ $b->Nama }}"></td>
            </tr>
            <tr>
              <td><label for="Jurusan" class="col-xs-3 col-form-label mr-2">Jurusan:</label></td>
              <td><input type="text" class="form-control" required="required" name="jurusan" value="{{ $b->Jurusan }}"></td>
            </tr>
            <tr>
              <td><label for="IPK" class="col-xs-3 col-form-label mr-2">IPK:</label></td>
              <td><input type="number" class="form-control" required="required" name="ipk" value="{{ $b->IPK }}"></td>
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

</h3>


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


</body>
@endsection
