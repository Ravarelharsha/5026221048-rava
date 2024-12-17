<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JadwalController extends Controller
{
    // Menampilkan halaman index (tabel jadwal ujian)
    public function index()
    {
        // Mengambil seluruh data dari tabel jadwalujian
        $jadwalUjian = DB::table('jadwalujian')->get();
        return view('jadwalujian', compact('jadwalUjian'));  // Pastikan nama view "jadwalujian" sesuai dengan nama file "jadwalujian.blade.php"
    }

    // Menampilkan halaman tambah data
    public function create()
    {
        return view('jadwalujiantambah');
    }

    // Menyimpan data jadwal ujian yang ditambahkan
    public function store(Request $request)
    {
        // Validasi data input sebelum disimpan
        $request->validate([
            'tanggal_ujian' => 'required|date',
            'jam_mulai' => 'required|string|max:10',
            'nama_matkul' => 'required|string|max:50',
        ]);

        // Menyimpan data ke dalam tabel jadwalujian
        DB::table('jadwalujian')->insert([
            'tanggal_ujian' => $request->tanggal_ujian,
            'jam_mulai' => $request->jam_mulai,
            'nama_matkul' => $request->nama_matkul,
        ]);

        // Redirect ke halaman index setelah data disimpan
        return redirect()->route('jadwalujian.index');
    }

    // Menampilkan halaman edit data
    public function edit($id)
    {
        // Mengambil data berdasarkan ID
        $jadwal = DB::table('jadwalujian')->where('kode_ujian', $id)->first();
        return view('jadwalujianedit', compact('jadwal'));
    }

    // Menyimpan perubahan data
    public function update(Request $request, $id)
    {
        // Validasi data input
        $request->validate([
            'tanggal_ujian' => 'required|date',
            'jam_mulai' => 'required|string|max:10',
            'nama_matkul' => 'required|string|max:50',
        ]);

        // Melakukan update data berdasarkan ID
        DB::table('jadwalujian')->where('kode_ujian', $id)->update([
            'tanggal_ujian' => $request->tanggal_ujian,
            'jam_mulai' => $request->jam_mulai,
            'nama_matkul' => $request->nama_matkul,
        ]);

        // Redirect ke halaman index setelah data diupdate
        return redirect()->route('jadwalujian.index');
    }
}
