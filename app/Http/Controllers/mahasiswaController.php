<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class mahasiswaController extends Controller
{
	public function idxmahasiswa()
	{
    	// mengambil data dari table mahasiswa
		//$mahasiswa = DB::table('mahasiswa')->get();
        $mahasiswa = DB::table('mahasiswa')->paginate(10);

    	// mengirim data mahasiswa ke view index
		return view('idxmahasiswa',['mahasiswa' => $mahasiswa]);

	}

	// method untuk menampilkan view form tambah mahasiswa
	// public function addmahasiswa()
	// {

	// 	// memanggil view tambah
	// 	return view('addmahasiswa');

	// }

	// method untuk insert data ke table mahasiswa
	// public function storemahasiswa(Request $request)
	// {
	// 	// insert data ke table mahasiswa
	// 	DB::table('mahasiswa')->insert([
	// 		'kodemahasiswa' => $request->id,
	// 		'merkmahasiswa' => $request->merk,
	// 		'stockmahasiswa' => $request->stock,
	// 		'tersedia' => $request->tersedia
	// 	]);
	// 	// alihkan halaman ke halaman mahasiswa
	// 	return redirect('/mahasiswa');

	// }

	// method untuk edit data mahasiswa
	public function edit($id)
	{
		// mengambil data mahasiswa berdasarkan id yang dipilih
		$mahasiswa = DB::table('mahasiswa')->where('NRP',$id)->get();
		// passing data mahasiswa yang didapat ke view edit.blade.php
		return view('editmahasiswa',['mahasiswa' => $mahasiswa]);

	}

	// update data mahasiswa
	public function update(Request $request)
	{
		// update data mahasiswa
		DB::table('mahasiswa')->where('NRP',$request->id)->update([
			'NRP' => $request->nrp,
            'Nama' => $request->nama,
			'Jurusan' => $request->jurusan,
			'IPK' => $request->ipk,
			// 'mahasiswa_alamat' => $request->alamat
		]);
		// alihkan halaman ke halaman mahasiswa
		return redirect('/mahasiswa');
	}

	// method untuk hapus data mahasiswa
	// public function hapus($id)
	// {
	// 	// menghapus data mahasiswa berdasarkan id yang dipilih
	// 	DB::table('mahasiswa')->where('kodemahasiswa',$id)->delete();

	// 	// alihkan halaman ke halaman mahasiswa
	// 	return redirect('/mahasiswa');
	// }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table mahasiswa sesuai pencarian data
		$mahasiswa = DB::table('mahasiswa')
		    ->where('Nama','like',"%".$cari."%")
		    ->paginate();

    		// mengirim data mahasiswa ke view index
		return view('idxmahasiswa',['mahasiswa' => $mahasiswa, 'cari'=> $cari]);

	}

    public function viewmahasiswa($id)
    {
    $mahasiswa = DB::table('mahasiswa')
        ->where('NRP',$id)
        ->get();

        return view('viewmahasiswa',['mahasiswa' => $mahasiswa]);
    }


}
