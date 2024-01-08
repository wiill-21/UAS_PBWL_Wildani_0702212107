@extends('layouts.app')
@section('content')


      <h2>Pesanan</h2>

      <div class="card">
        <div class="card-header">
          <button type="button" class="btn btn-sm btn-primary" onclick="window.location='{{ url('pesanan/create') }}'">
            <i class="fas fa-plus solid"></i>Add New Pesanan
          </button>
        </div>
        <div class="card-body">
            <table class="table table-sm table-striped table-bordered">
    <tr>
        <th>ID</th>
        <th>NAMA PESANAN</th>
        <th>NAMA PELANGGAN</th>
        <th>JUMLAH PESANAN</th>
        <th>TANGGAL PESANAN</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>

    @foreach ($rows as $row)
        <tr>
            <td>{{ $row->psn_id }}</td>
            <td>{{ $row->psn_nama_menu }}</td>
            <td>{{ $row->psn_nama_plgn }}</td>
            <td>{{ $row->psn_jlh }}</td>
            <td>{{ $row->psn_tgl }}</td>
            <td>
                <a href="{{ url('pesanan/edit/' . $row->psn_id) }}" class="btn btn-warning">Edit</a>
            </td>
            <td>
                <form action="{{ url('pesanan/' . $row->psn_id) }}" method="post" onsubmit="return confirm('Are you sure?')">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>


@endsection