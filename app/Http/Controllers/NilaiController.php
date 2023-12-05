<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiController extends Controller{
    public function index(){
        // mengambil data dari table nilaikuliah
        $nilaikuliah = DB::table('nilaikuliah')->get();
    	// mengirim data pegawai ke view index
		return view('indexNilai',['nilaikuliah' => $nilaikuliah]);
    }


    public function tambah(){
        return view('tambahNilai');
    }

    public function store(Request $request){
        DB::table('nilaikuliah')->insert([
			'NRP' => $request->nrp,
			'NilaiAngka' => $request->nilaiangka,
			'SKS' => $request->sks
		]);

        return redirect('/nilai');
    }

    // public function view($id){
    //     $nilaikuliah = DB::table('nilaikuliah')->where('ID',$id)->get();
    //     return view('viewNilai',['nilaikuliah' => $nilaikuliah]);
    // }
}
