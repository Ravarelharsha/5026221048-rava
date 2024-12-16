@extends('template')

@section('headerPage', 'Tambah Handphone')

@section('content')
    <form action="/handphone/store" method="POST">
        @csrf
        <div class="mb-3">
            <label for="handphone_nama" class="form-label">Merk Handphone</label>
            <input type="text" name="handphone_nama" class="form-control" id="handphone_nama" required>
        </div>
        <div class="mb-3">
            <label for="handphone_jumlah" class="form-label">Stock Handphone</label>
            <input type="number" name="handphone_jumlah" class="form-control" id="handphone_jumlah" required>
        </div>
        <div class="mb-3">
            <label for="tersedia" class="form-label">Tersedia</label>
            <select name="tersedia" class="form-select" id="tersedia" required>
                <option value="Y">Ya</option>
                <option value="N">Tidak</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
