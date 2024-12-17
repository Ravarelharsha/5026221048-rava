@extends('template')

@section('content')
    <h1>Tambah Jadwal Ujian</h1>
    <form action="{{ route('jadwalujian.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="tanggal_ujian">Tanggal Ujian</label>
            <input type="date" id="tanggal_ujian" name="tanggal_ujian" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="jam_mulai">Jam Mulai</label>
            <input type="text" id="jam_mulai" name="jam_mulai" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="nama_matkul">Nama Mata Kuliah</label>
            <input type="text" id="nama_matkul" name="nama_matkul" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">SIMPAN</button>
    </form>

    <a href="{{ route('jadwalujian.index') }}" class="btn btn-secondary mt-3">Kembali ke Daftar</a>
@endsection




