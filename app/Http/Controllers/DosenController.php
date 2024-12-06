<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index(){
    	return "<h1>Halo ini adalah method index, dalam controller DosenController. - www.malasngoding.com</h2>";
    }

    public function blog(){
        return view('blog');
    }

    public function biodata(){
        $nama = "Marcello Ezra Andilolo Lubis";
        $umur = 20;
        $hasil = 26 + 50;
        $matkul = ["Algoritma & Pemrograman","Kalkulus","Pemrograman Web"];
    	return view('biodata', [
            'nama' => $nama,
            'umur' => $umur,
            'hasil' => $hasil,
            'matkul' => $matkul
        ]);
    }
}
