@extends('template')

@section('headerPage', 'Data Handphone')

@section('content')
	<div class="d-flex justify-content-between align-items-center mb-3">
		<a href="/handphone/tambah" class="btn btn-primary">
			<i class="fa-solid fa-plus"></i> Tambah Handphone Baru
		</a>

		<!-- Search Form -->
		<form action="/handphone" method="GET" class="d-flex align-items-center">
			<input type="text" name="cari" class="form-control me-2" placeholder="Cari Merk Handphone" value="{{ request('cari') }}">
			<input type="number" name="pagination" class="form-control me-2" placeholder="Pagination" value="{{ request('pagination', 10) }}" style="max-width: 100px;">
			<button type="submit" class="btn btn-success">
				<i class="fa-solid fa-magnifying-glass"></i>
			</button>
		</form>
	</div>

	<table class="table table-bordered table-striped table-hover">
		<thead class="table-dark">
			<tr>
				<th>Kode Handphone</th>
				<th>Merk Handphone</th>
				<th>Stock</th>
				<th>Tersedia</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			@foreach($handphone as $item)
			<tr>
				<td>{{ $item->handphone_id }}</td>
				<td>{{ $item->handphone_nama }}</td>
				<td>{{ $item->handphone_jumlah }}</td>
				<td class="text-center">
                    <!-- Yes/No Button -->
                    <form action="/handphone/handphone_tersedia/{{ $item->handphone_id }}" method="POST" style="display:inline;">
                        @csrf
                        @method('PUT')
                        @if ($item->handphone_tersedia === 'Y')
                            <button type="submit" name="handphone_tersedia" value="N" class="btn btn-danger btn-sm">No</button>
                        @else
                            <button type="submit" name="handphone_tersedia" value="Y" class="btn btn-success btn-sm">Yes</button>
                        @endif
                    </form>
                </td>
				<td class="text-center">
					<a href="/handphone/edit/{{ $item->handphone_id }}" class="btn btn-warning btn-icon">
						<i class="fa-solid fa-pen-to-square"></i>
					</a>
					<form action="/handphone/hapus/{{ $item->handphone_id }}" method="POST" style="display: inline;">
						@csrf
						@method('DELETE')
						<button type="submit" class="btn btn-danger btn-icon">
							<i class="fa-solid fa-trash"></i>
						</button>
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	<br/>
	Halaman : {{ $handphone->currentPage() }} <br/>
	Jumlah Data : {{ $handphone->total() }} <br/>
	Data Per Halaman : {{ $handphone->perPage() }} <br/>

	<!-- Pagination Links -->
	<div class="d-flex justify-content-center px-2">
		{{ $handphone->appends(['cari' => request('cari'), 'pagination' => request('pagination')])->links() }}
	</div>
@endsection
