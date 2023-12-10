<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class mejaController extends Controller
{
	public function idxmeja()
	{
    	// mengambil data dari table meja
		//$meja = DB::table('meja')->get();
        $meja = DB::table('meja')->paginate(10);

    	// mengirim data meja ke view index
		return view('idxmeja',['meja' => $meja]);

	}

	// method untuk menampilkan view form tambah meja
	public function addmeja()
	{

		// memanggil view tambah
		return view('addmeja');

	}

	// method untuk insert data ke table meja
	public function storemeja(Request $request)
	{
		// insert data ke table meja
		DB::table('meja')->insert([
			'kodemeja' => $request->id,
			'merkmeja' => $request->merk,
			'stockmeja' => $request->stock,
			'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman meja
		return redirect('/meja');

	}

	// method untuk edit data meja
	public function edit($id)
	{
		// mengambil data meja berdasarkan id yang dipilih
		$meja = DB::table('meja')->where('kodemeja',$id)->get();
		// passing data meja yang didapat ke view edit.blade.php
		return view('editmeja',['meja' => $meja]);

	}

	// update data meja
	public function update(Request $request)
	{
		// update data meja
		DB::table('meja')->where('kodemeja',$request->id)->update([
			'merkmeja' => $request->merkmeja,
			'stockmeja' => $request->stockmeja,
			'tersedia' => $request->tersedia,
			// 'meja_alamat' => $request->alamat
		]);
		// alihkan halaman ke halaman meja
		return redirect('/meja');
	}

	// method untuk hapus data meja
	public function hapus($id)
	{
		// menghapus data meja berdasarkan id yang dipilih
		DB::table('meja')->where('kodemeja',$id)->delete();

		// alihkan halaman ke halaman meja
		return redirect('/meja');
	}

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table meja sesuai pencarian data
		$meja = DB::table('meja')
		    ->where('merkmeja','like',"%".$cari."%")
		    ->paginate();

    		// mengirim data meja ke view index
		return view('idxmeja',['meja' => $meja, 'cari'=> $cari]);

	}

    public function viewmeja($id)
    {
    $meja = DB::table('meja')
        ->where('kodemeja', $id)
        ->get();

        return view('viewmeja',['meja' => $meja]);
    }
}
