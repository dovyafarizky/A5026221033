@extends('master2')

@section('title', 'Data Pegawai')

@section('konten')
<!--<h2>www.malasngoding.com</h2>-->
	<h3>Data Belanja</h3>

	<a href="/keranjangbelanja/addbeli" class="btn btn-primary"> + Tambah Pembelian baru</a>

	<br/>
    {{-- <p>Cari Data Pembelian :</p>
	<form action="/keranjangbelanja/cari" method="GET" class="form-inline">
		<input class="form-control" type="text" name="cari" placeholder="Cari Pembelian .." value="{{ old("cari", isset($cari) ? $cari : '') }}">
		<input type="submit" value="CARI" class="btn btn-info">
	</form> --}}
	<br/>

	<table class="table table-striped table-hover">
		<tr>
			<th>Kode Pembelian</th>
			<th>Kode Barang</th>
			<th>Jumlah Pembelian</th>
			<th>Harga per Item</th>
            <th>Total</th>
            <th>Action</th>
		</tr>
		@foreach($keranjangbelanja as $b)
		<tr>
			<td>{{ $b->ID }}</td>
			<td>{{ $b->KodeBarang }}</td>
			<td>{{ $b->Jumlah }}</td>
			<td>
                <?php
                echo number_format($b->Harga,2);
                ?>
            </td>
            <td>
                <?php
                echo number_format($b->Jumlah*$b->Harga,2);
                ?>
                {{-- {{ $b->Jumlah*$b->Harga }}</td> --}}
			<td>
              <a href="/keranjangbelanja/batal/{{ $b->ID }}" class="btn btn-danger"> Batal</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $keranjangbelanja->links() }}
@endsection
