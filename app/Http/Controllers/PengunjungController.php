<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengunjungController extends Controller
{
    public function index()
    {
        DB::table('pagecounter')->increment('Jumlah');
        $counter = DB::table('pagecounter')->where('ID', 1)->first();

        return view('pengunjung',['jumlah' => $counter->Jumlah]);
    }
}
