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

            <input type="hidden" name="kodehandphone" id="kodehandphone" class="form-control" required="required" value="{{ $handphone->kodehandphone }}">

            <div class="form-group row mb-3">
                <label for="merkhandphone" class="col-sm-2 col-form-label">Merk Handphone</label>
                <div class="col-sm-10">
                    <input type="text" name="merkhandphone" id="merkhandphone" class="form-control" required="required" value="{{ $handphone->merkhandphone }}">
                </div>
            </div>

            <div class="form-group row mb-3">
                <label for="stockhandphone" class="col-sm-2 col-form-label">Stock</label>
                <div class="col-sm-10">
                    <input type="number" name="stockhandphone" id="stockhandphone" class="form-control" required="required" value="{{ $handphone->stockhandphone }}">
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
