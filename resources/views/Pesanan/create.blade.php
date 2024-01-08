@extends('layouts.app')

@section('content')
    <h2>Add Pesanan</h2>
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-sm btn-warning" onclick="window.location='{{ url('pesanan') }}'">
                <i class="fas fa-plus solid"></i>KEMBALI
            </button>
        </div>

        <form action="{{ url('pesanan') }}" method="post">
            @csrf
            <div class="row mb-4">
                <label for="psn_nama_menu" class="col-sm-2 col-form-label">NAMA BARANG</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-sm" id="psn_nama_menu" name="psn_nama_menu">
                </div>
            </div>

            <div class="row mb-4">
                <label for="psn_nama_plgn" class="col-sm-2 col-form-label">NAMA PELANGGAN</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-sm" id="psn_nama_plgn" name="psn_nama_plgn">
                </div>
            </div>

            <div class="row mb-4">
                <label for="psn_jlh" class="col-sm-2 col-form-label">JUMLAH PESANAN</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control form-control-sm" id="psn_jlh" name="psn_jlh">
                </div>
            </div>

            <div class="row mb-4">
                <label for="psn_tgl" class="col-sm-2 col-form-label">TANGGAL PESANAN</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control form-control-sm" id="psn_tgl" name="psn_tgl">
                </div>
            </div>

            <div class="row mb-2 text-end">
                <label for="" class="col-sm-3 col-form-label"></label>
                <div class="col-sm-9">
                    <button type="submit" class="btn btn-sm btn-danger">SIMPAN</button>
                </div>
            </div>
        </form>
    </div>
@endsection
