@extends('master2')

@section('title', 'Data mahasiswa')

@section('konten')
<!--<h2>www.malasngoding.com</h2>-->
	<h3>Data Mahasiswa</h3>

	{{-- <a href="/meja/addmeja" class="btn btn-primary"> + Tambah Meja baru</a> --}}

	<br/>
    <p>Cari Data Mahasiswa :</p>
	<form action="/mahasiswa/cari" method="GET" class="form-inline">
		<input class="form-control" type="text" name="cari" placeholder="Cari Mahasiswa .." value="{{ old("cari", isset($cari) ? $cari : '') }}">
		<input type="submit" value="CARI" class="btn btn-info">
	</form>
	<br/>

	<table class="table table-striped table-hover">
		<tr>
			<th>NRP</th>
			<th>Nama</th>
			<th>Jurusan</th>
            <th>IPK</th>
            <th>Action</th>
		</tr>
		@foreach($mahasiswa as $b)
		<tr>
			<td>{{ $b->NRP }}</td>
            <td>{{ $b->Nama }}</td>
			<td>{{ $b->Jurusan }}</td>
			<td>{{ $b->IPK }}</td>
			<td>
                <a href="/mahasiswa/edit/{{ $b->NRP }}" class="btn btn-warning">Edit</a>
				|
                <a href="/mahasiswa/viewmahasiswa/{{ $b->NRP }}" class="btn btn-success">View</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $mahasiswa->links() }}
@endsection
