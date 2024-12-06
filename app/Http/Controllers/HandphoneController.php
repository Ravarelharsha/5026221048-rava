<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HandphoneController extends Controller
{
    public function index(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengatur jumlah pagination
        $pagination = $request->query('pagination', 10);

        // mengambil data dari table handphone sesuai pencarian data
        if ($cari == null) {
            $handphone = DB::table('handphone')->paginate($pagination);
        } else {
            $handphone = DB::table('handphone')
                ->where('merkhandphone', 'like', "%" . $cari . "%")
                ->paginate($pagination);
        }

        // mengirim data handphone ke view index
        return view('datahandphone', ['handphone' => $handphone]);
    }

    public function tambah()
    {
        return view('tambahhandphone');
    }

    // method untuk insert data ke table handphone
    public function store(Request $request)
    {
        // insert data ke table handphone
        DB::table('handphone')->insert([
            'merkhandphone' => $request->merkhandphone,
            'stockhandphone' => $request->stockhandphone,
            'tersedia' => $request->tersedia
        ]);
        // redirect halaman ke halaman handphone
        return redirect('/handphone');
    }

    // method untuk menampilkan form edit data handphone
    public function editGet($kodehandphone)
    {
        // mengambil data handphone berdasarkan id
        $handphone = DB::table('handphone')->where('kodehandphone', $kodehandphone)->first();

        // passing data handphone yang didapat ke view edit
        return view('edithandphone', ['handphone' => $handphone]);
    }

    // method untuk update data handphone
    public function editPost(Request $request, $kodehandphone)
    {
        // update data handphone berdasarkan id
        DB::table('handphone')->where('kodehandphone', $request->kodehandphone)->update([
            'merkhandphone' => $request->merkhandphone,
            'stockhandphone' => $request->stockhandphone,
            'tersedia' => $request->tersedia
        ]);

        // redirect halaman kembali ke halaman handphone
        return redirect('/handphone');
    }

    // method untuk hapus data handphone
    public function delete($kodehandphone)
    {
        // hapus data handphone berdasarkan id
        DB::table('handphone')->where('kodehandphone', $kodehandphone)->delete();

        // redirect halaman kembali ke halaman handphone
        return redirect('/handphone');
    }
}
