@extends('template')  <!-- Extend the template -->

@section('headerPage', 'Edit Data Handphone')

@section('content')  <!-- Start the content section -->

<div class="container">
    <p class="text-center">
        <a href="/handphone" class="btn btn-warning btn-sm">Kembali</a>
    </p>

    <div class="card p-4">
        <form action="/handphone/edit/{{ $handphone->kodehandphone }}" method="POST">
            {{ csrf_field() }}

            <input type="hidden" name="handphone_id" id="handphone_id" class="form-control" required="required" value="{{ $handphone->handphone_id }}">

            <div class="form-group row mb-3">
                <label for="handphone_nama" class="col-sm-2 col-form-label">Merk Handphone</label>
                <div class="col-sm-10">
                    <input type="text" name="handphone_nama" id="handphone_nama" class="form-control" required="required" value="{{ $handphone->handphone_nama }}">
                </div>
            </div>

            <div class="form-group row mb-3">
                <label for="handphone_jumlah" class="col-sm-2 col-form-label">Stock</label>
                <div class="col-sm-10">
                    <input type="number" name="handphone_jumlah" id="handphone_jumlah" class="form-control" required="required" value="{{ $handphone->handphone_jumlah }}">
                </div>
            </div>

            <div class="form-group row mb-3">
                <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
                <div class="col-sm-10 d-flex align-items-center">
                    <!-- Radio Button for N -->
                    <div class="form-check me-3">
                        <input
                            class="form-check-input"
                            type="radio"
                            name="tersedia"
                            id="tersediaN"
                            value="N"
                            {{ $handphone->tersedia == 'N' ? 'checked' : '' }}>
                        <label class="form-check-label" for="tersediaN">
                            Tidak (N)
                        </label>
                    </div>

                    <!-- Radio Button for Y -->
                    <div class="form-check">
                        <input
                            class="form-check-input"
                            type="radio"
                            name="tersedia"
                            id="tersediaY"
                            value="Y"
                            {{ $handphone->tersedia == 'Y' ? 'checked' : '' }}>
                        <label class="form-check-label" for="tersediaY">
                            Ya (Y)
                        </label>
                    </div>
                </div>
            </div>

            <center><button type="submit" class="btn btn-primary mt-2">Update Data</button></center>
        </form>
    </div>
</div>

@endsection  <!-- End the content section -->
