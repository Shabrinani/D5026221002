<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;


class KaryawanController extends Controller
{
    public function index()
    {
    	$karyawan = DB::table('karyawan')->get();

    	return view('indexKaryawan',['karyawan' => $karyawan]);
    }

    public function tambah()
    {
	    return view('tambahKaryawan');
    }

    public function store(Request $request)
    {
        $existKaryawan = DB::table('karyawan')
        ->where('kodepegawai', $request->kode)
        ->first();

        if ($existKaryawan) {
            return redirect('/karyawan')->with('error', 'Kode Karyawan Sudah Ada!!!');
        }

	    DB::table('karyawan')->insert([
		    'kodepegawai' => $request->kode,
		    'namalengkap' => $request->nama,
		    'divisi' => $request->divisi,
		    'departemen' => $request->departemen
	    ]);
	    return redirect('/karyawan');
    }

    public function hapus($kode)
    {
	    DB::table('karyawan')->where('kodepegawai',$kode)->delete();

	    return redirect('/karyawan');
    }

}
