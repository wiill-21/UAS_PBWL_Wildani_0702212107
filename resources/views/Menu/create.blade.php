@extends('layouts.app')

@section('content')
    <h2>Add Barang</h2>
    <div class="card">
        <div class="card-header">
          <button type="button" class="btn btn-sm btn-warning" onclick="window.location='{{ url('menu') }}'">
            <i class="fas fa-plus solid"></i>KEMBALI
          </button>
        </div>

    <form action="{{ url('menu') }}" method="post">
        @csrf
        <div class="row mb-3">
            <label for="menu_nama" class="col-sm-2 col-form-label">
                NAMA BARANG
            </label>
            <div class="col-sm-10">
                <input type="text" name="menu_nama" id="menu_nama" class="form-control">
            </div>
        </div>
        
        <div class="row mb-3">
            <label for="menu_hrg" class="col-sm-2 col-form-label">
                HARGA BARANG
            </label>
            <div class="col-sm-10">
                <input type="text" name="menu_hrg" id="menu_hrg" class="form-control">
            </div>
        </div>
        
        <div class="row mb-3 text-end">
            <label for="" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
                <button type="submit" class="btn btn-sm btn-danger">SIMPAN</button>
            </div>
        </div>
    </form>
@endsection
