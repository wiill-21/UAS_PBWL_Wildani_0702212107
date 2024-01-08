@extends('layouts.app')

@section('content')
    <h2>Edit Pesanan</h2>
    <div class="card">
        <div class="card-header">
          <button type="button" class="btn btn-sm btn-warning" onclick="window.location='{{ url('pesanan') }}'">
            <i class="fas fa-plus solid"></i>KEMBALI
          </button>
        </div>

    <form action="{{ url('pesanan/' . $row->psn_id) }}" method="post">
        <input type="hidden" name="_method" value="PATCH">
        @csrf
        <div class="row mb-4">
            <label for="psn_nama_menu" class="col-sm-3 col-form-label">NAMA MENU</label>
            <div class="col-sm-9">
                <input type="text" name="psn_nama_menu" id="psn_nama_menu" class="form-control" value="{{ $row->psn_nama_menu }}">
            </div>
        </div>

        <div class="row mb-4">
            <label for="psn_nama_plgn" class="col-sm-3 col-form-label">NAMA PELANGGAN</label>
            <div class="col-sm-9">
                <input type="text" name="psn_nama_plgn" id="psn_nama_plgn" class="form-control" value="{{ $row->psn_nama_plgn }}">
            </div>
        </div>
        <div class="row mb-4">
            <label for="psn_jlh" class="col-sm-3 col-form-label">JUMLAH PESANAN</label>
            <div class="col-sm-9">
                <input type="number" name="psn_jlh" id="psn_jlh" class="form-control" value="{{ $row->psn_jlh }}">
            </div>
        </div>

        <div class="row mb-4">
            <label for="psn_tgl" class="col-sm-3 col-form-label">TANGGAL PESANAN</label>
            <div class="col-sm-9">
                <input type="date" name="psn_tgl" id="psn_tgl" class="form-control" value="{{ $row->psn_tgl }}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="" class="col-sm-3 col-form-label"></label>
            <div class="col-sm-9 text-end">
                <button type="submit" class="btn btn-sm btn-danger">SIMPAN</button>
            </div>
        </div>
    </form>
@endsection
