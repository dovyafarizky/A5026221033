<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class keranjangbelanjaController extends Controller
{
	public function idxbelanja()
	{
    	// mengambil data dari table pegawai
		//$pegawai = DB::table('pegawai')->get();
        $keranjangbelanja = DB::table('keranjangbelanja')->paginate(10);

    	// mengirim data pegawai ke view index
		return view('idxbelanja',['keranjangbelanja' => $keranjangbelanja]);

	}

	// method untuk menampilkan view form tambah pegawai
	public function addbeli()
	{

		// memanggil view tambah
		return view('addbeli');

	}

	// method untuk insert data ke table pegawai
	public function storebeli(Request $request)
	{
		// insert data ke table pegawai
		DB::table('keranjangbelanja')->insert([
			'ID' => $request->id,
			'KodeBarang' => $request->kode,
			'Jumlah' => $request->jumlah,
			'Harga' => $request->harga
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/keranjangbelanja');

	}

	// method untuk edit data pegawai
	public function edit($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$pegawai = DB::table('pegawai')->where('pegawai_id',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('edit',['pegawai' => $pegawai]);

	}

	// update data pegawai
	public function update(Request $request)
	{
		// update data pegawai
		DB::table('pegawai')->where('pegawai_id',$request->id)->update([
			'pegawai_nama' => $request->nama,
			'pegawai_jabatan' => $request->jabatan,
			'pegawai_umur' => $request->umur,
			'pegawai_alamat' => $request->alamat
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/pegawai');
	}

	// method untuk hapus data pegawai
	public function batal($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('keranjangbelanja')->where('ID',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/keranjangbelanja');
	}

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$pegawai = DB::table('keranjangbelanja')
		    ->where('ID','like',"%".$cari."%")
		    ->paginate();

    		// mengirim data pegawai ke view index
		return view('idxbelanja',['keranjangbelanja' => $keranjangbelanja, 'cari'=> $cari]);

	}

    public function viewpegawai($id)
    {
    $pegawai = DB::table('pegawai')
        ->where('ID', $id)
        ->get();

        return view('viewpegawai',['pegawai' => $pegawai]);
    }
}
