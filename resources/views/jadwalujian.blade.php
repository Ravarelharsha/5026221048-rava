@extends('template')  <!-- Menyambungkan dengan layout template.blade.php -->

@section('content')  <!-- Bagian konten utama dari halaman ini -->
    <h1>Daftar Jadwal Ujian</h1>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Kode Ujian</th>
                <th>Tanggal Ujian</th>
                <th>Jam Mulai</th>
                <th>Nama Mata Kuliah</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jadwalUjian as $jadwal)
                <tr>
                    <td>{{ $jadwal->kode_ujian }}</td>
                    <td>{{ $jadwal->tanggal_ujian }}</td>
                    <td>{{ $jadwal->jam_mulai }}</td>
                    <td>{{ $jadwal->nama_matkul }}</td>
                    <td>
                        <a href="{{ route('jadwalujian.edit', $jadwal->kode_ujian) }}" class="btn btn-warning btn-sm">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('jadwalujian.create') }}" class="btn btn-primary">Tambah Data</a>
@endsection





