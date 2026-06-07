<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SepatuController extends Controller
{
    //
     public function index()
    {
    	// mengambil data dari table pegawai
    	//$pegawai = DB::table('pegawai')->get(); //jika tidak pake paginate
        $sepatu = DB::table('sepatu')->paginate(10);

    	// mengirim data pegawai ke view index
    	return view('sepatu',['sepatu' => $sepatu]);

    }
//func cari
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$sepatu = DB::table('sepatu')
        ->where('merksepatu','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('sepatu',['sepatu' => $sepatu]);

	}


        // method untuk menampilkan view form tambah pegawai
	public function tambah()
	{

		// memanggil view tambah
		return view('tambahsepatu');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('sepatu')->insert([
			'merksepatu' => $request->merk,
			'stocksepatu' => $request->stock,
			'tersedia' => $request->tersedia,
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/sepatu');

	}

	// method untuk edit data pegawai
	public function edit($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$sepatu = DB::table('sepatu')->where('kodesepatu',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('editsepatu',['sepatu' => $sepatu]);

	}

	// update data pegawai
	public function update(Request $request)
	{
		// update data pegawai
		DB::table('sepatu')->where('kodesepatu',$request->id)->update([
			'merksepatu' => $request->merk,
			'stocksepatu' => $request->stock,
			'tersedia' => $request->tersedia,
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/sepatu');
	}

	// method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('sepatu')->where('kodesepatu',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/sepatu');
	}
}
