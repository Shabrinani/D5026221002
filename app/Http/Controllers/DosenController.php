<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    //
    public function index(){
        $a = 3 ;
        $b = 7 ;
        $c = $b*$a ;
        return "<h1>Hasil perkalian = ".(string)$c."</h1>";
    }

    public function showBlog(){
        $nama = "Shabrina";
        $alamat = "Surabaya";
        $umur = 18;
        return view('blog', ['nama' => $nama, 'alamat' => $alamat, 'umur' => $umur]);
    }

    public function shownama($nama){ //$nama sama dengan {nama} di web.php
        return "Anda telah mengisikan : ".$nama;
    }

    public function formulir(){
        //cek soal hak akses
    	return view('formulir');
    }

    public function proses(Request $request){
        $nama = $request->input('nama');
     	$alamat = $request->input('alamat');
        return "Nama : ".$nama.", Alamat : ".$alamat;
    }
}
