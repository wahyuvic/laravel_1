<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Function_;

class homejamurjaya extends Controller
{
    public function index(){
        return "halo bos ini halaman dari controller";
    }
    public function show_html(){
        return view('home.halo');
    }
    public function belajar_blade(){
        $nama ="wahyu";
        $daftar_hewan =["kucing","jerapah","lele"];
        return view('home.belajar_blade', compact(
         'nama','daftar_hewan'  
        ));
    }

    public function penggunaan_layout(){
        return view('home.layout');
    }

    public function contoh(){
        return view('home.contoh');
    }
    public function contoh_post(Request $request){
       $nama =$request->get('nama');
        return ("ini fungsi dari contoh post ".$nama);
    }
}
