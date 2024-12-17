@extends('template')

@section('headerPage', 'Data Handphone')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <a href="/handphone/tambah" class="btn btn-primary">
            <i class="fa-solid fa-plus"></i> Tambah Handphone Baru
        </a>

        <!-- Search Form -->
        <form action="/handphone" method="GET" class="d-flex align-items-center">
            <input type="text" name="cari" class="form-control me-2" placeholder="Cari...">
            <button class="btn btn-secondary" type="submit">Cari</button>
        </form>
    </div>

    <!-- Data Table -->
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Merk Handphone</th>
                <th>Stock</th>
                <th>Tersedia</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($handphone as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item->handphone_nama }}</td>
                    <td>{{ $item->handphone_jumlah }}</td>
                    <td>{{ $item->handphone_tersedia ? 'Tersedia' : 'Tidak Tersedia' }}</td>
                    <td>
                        <!-- Button "Beli" to add a new record -->
                        <a href="/handphone/tambah" class="btn btn-success btn-sm">
                            Beli
                        </a>

                        <!-- Button "Batal" to delete the record -->
                        <form action="/handphone/hapus/{{ $item->handphone_id }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">
                                Batal
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Pagination -->
    {{ $handphone->links() }}
@endsection
