@extends('layouts.app')

@section('content')
    <h2>Edit Barang</h2>
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-sm btn-warning" onclick="window.location='{{ url('menu') }}'">
                <i class="fas fa-plus solid"></i>KEMBALI
            </button>
        </div>

        <form action="{{ url('menu') }}" method="post">
            @csrf
            <div class="row mb-4">
                <label for="menu_nama" class="col-sm-3 col-form-label">NAMA BARANG</label>
                <div class="col-sm-9">
                    <input type="text" name="menu_nama" id="menu_nama" class="form-control" value="{{ $row->menu_nama }}">
                </div>
            </div>

            <div class="row mb-4">
                <label for="menu_hrg" class="col-sm-3 col-form-label">HARGA </label>
                <div class="col-sm-9">
                    <input type="text" name="menu_hrg" id="menu_hrg" class="form-control" value="{{ $row->menu_hrg }}">
                </div>
            </div>

            <div class="row mb-3 text-end">
                <div class="col-sm-3"></div>
                <div class="col-sm-9">
                    <button type="submit" class="btn btn-sm btn-danger">SIMPAN</button>
                </div>
            </div>
        </form>
    </div>
@endsection
