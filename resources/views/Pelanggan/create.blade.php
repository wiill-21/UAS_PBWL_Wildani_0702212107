@extends('layouts.app')

@section('content')
    <h2>Add Pelanggan</h2>
    <div class="card">
        <div class="card-header">
          <button type="button" class="btn btn-sm btn-warning" onclick="window.location='{{ url('pelanggan') }}'">
            <i class="fas fa-plus solid"></i>KEMBALI
          </button>
        </div>

    <form action="{{ url('pelanggan') }}" method="post">
        @csrf
        <div class="row mb-4">
          <label for="plgn_nama" class="col-sm-2 col-form-label">
            NAMA PELANGGAN</label>
          <div class="col-sm-10">
              <input type="text" class="form-control form-control-sm" id="plgn_nama" name="plgn_nama">
          </div>
      </div>
      
      <div class="row mb-4">
          <label for="plgn_no" class="col-sm-2 col-form-label">
            NOMOR HP</label>
          <div class="col-sm-10">
              <input type="text" class="form-control form-control-sm" id="plgn_no" name="plgn_no">
          </div>
      </div>
      
            <div class="row mb-2 text-end">
              <label for="" class="col-sm-3 col-form-label"></label>
              <div class="col-sm-11,5">
                  <button type="submit" class="btn btn-sm btn-danger">SIMPAN</button>
              </div>
          </div>
          
    </form>
@endsection
