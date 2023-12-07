<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MejaController extends Controller
{
    public function index()
    {
    	// mengambil data dari table meja
    	$meja = DB::table('meja')->get();

    	// mengirim data meja ke view index
    	return view('indexMeja',['meja' => $meja]);
    }

    // method untuk menampilkan view form tambah meja
    public function tambah()
    {
	    // memanggil view tambah
	    return view('tambahMeja');
    }

    // method untuk insert data ke table meja
    public function store(Request $request)
    {
        // Mengambil nilai stok dari request
        $stock = $request->stock;

        // Menentukan nilai 'tersedia' berdasarkan stok meja
        $tersedia = $stock > 0 ? true : false;

	    // insert data ke table meja
	    DB::table('meja')->insert([
		    'merkmeja' => $request->merk,
		    'stockmeja' => $stock,
            'tersedia' => $tersedia
	    ]);
	    // alihkan halaman ke halaman meja
	    return redirect('/meja');
    }

    // method untuk edit data meja
    public function edit($kode)
    {
	    // mengambil data meja berdasarkan kodemeja yang dipilih
	    $meja = DB::table('meja')->where('kodemeja',$kode)->get();
	    // passing data meja yang didapat ke view editMeja.blade.php
	    return view('editMeja',['meja' => $meja]);
    }

    // update data meja
    public function update(Request $request)
    {
	    // update data meja
	    DB::table('meja')->where('kodemeja',$request->kode)->update([  //DB::table('pegawai') --> optional return value
		    'merkmeja' => $request->merk,
		    'stockmeja' => $request->stock
	    ]);
	    // alihkan halaman ke halaman meja
	    return redirect('/meja');
        //redirect melampar ke suatu url route pegawai, maka akan query all record
    }

    // method untuk hapus data meja
    public function hapus($kode)
    {
	    // menghapus data meja berdasarkan id yang dipilih
	    DB::table('meja')->where('kodemeja',$kode)->delete();

	    // alihkan halaman ke halaman meja
	    return redirect('/meja');
    }

    public function view($kode)
    {
	    // mengambil data pegawai berdasarkan id yang dipilih
	    $meja = DB::table('meja')->where('kodemeja',$kode)->get();
	    // passing data pegawai yang didapat ke view view.blade.php
	    if ($meja) {
            return view('viewMeja', ['meja' => $meja]);
        } else {
            return redirect()->back()->with('error', 'Data meja tidak ditemukan.');
        }
    }
}
