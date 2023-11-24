<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    //
    public function index(){
        return "Halo ini adalah method index, dalam controller DosenController. - www.malasngoding.com";
    }
    public function biodata(){
        $nama = "Dovy Adeeb" ;
        $alamat = "Surabaya" ;
        $umur = 19 ;
        $pelajaran = ["Alogaritma & Pemrograman", "Kalkulus", "pemrograman Web"];
    	return view('biodata',['nama' => $nama, 'alamat' => $alamat, 'umur' => $umur, 'matkul' => $pelajaran]);
    }

    public function showjam($jam){

    	return "<h3>Sekarang jam $jam <h3>";

    }

    public function proses(Request $request){
        $nama = $request->input('nama');
     	$alamat = $request->input('alamat');
        $nrp = $request->input('nrp');
        return "Anda telah memgisikan <br> Nama : ".$nama.", Alamat : ".$alamat. ", NRP :". $nrp. "<br> Isi asli class Request".$request;
    }

    public function formulir(){
        return view('formulir');
    }

    public function home(){
		return view('home');
	}

	public function tentang(){
		return view('tentang');
	}

	public function kontak(){
		return view('kontak');
	}
}
