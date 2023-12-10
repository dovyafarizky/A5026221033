@extends('master2')

@section('title', 'Data meja')

@section('konten')
<!--<h2>www.malasngoding.com</h2>-->
	<h3>Data Meja</h3>

	<a href="/meja/addmeja" class="btn btn-primary"> + Tambah Meja baru</a>

	<br/>
    <p>Cari Data Meja :</p>
	<form action="/meja/cari" method="GET" class="form-inline">
		<input class="form-control" type="text" name="cari" placeholder="Cari Pembelian .." value="{{ old("cari", isset($cari) ? $cari : '') }}">
		<input type="submit" value="CARI" class="btn btn-info">
	</form>
	<br/>

	<table class="table table-striped table-hover">
		<tr>
			<th>Merk</th>
			<th>Stock</th>
			<th>tersedia</th>
            <th>Action</th>
		</tr>
		@foreach($meja as $b)
		<tr>
			<td>{{ $b->merkmeja }}</td>
			<td>{{ $b->stockmeja }}</td>
			<td>{{ $b->tersedia }}</td>
			<td>
                <a href="/meja/edit/{{ $b->kodemeja }}" class="btn btn-warning">Edit</a>
				|
                <a href="/meja/hapus/{{ $b->kodemeja }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $meja->links() }}
@endsection
