@extends('layouts.app')
@section('content')


      <h2>Data Barang</h2>

      <div class="card">
        <div class="card-header">
          <button type="button" class="btn btn-sm btn-primary" onclick="window.location='{{ url('menu/create') }}'">
            <i class="fas fa-plus solid"></i>Add New Barang
          </button>
        </div>
        <div class="card-body">
            <table class="table table-sm table-striped table-bordered">
    <tr>
        <th>ID</th>
        <th>NAMA BARANG</th>
        <th>HARGA</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>

    @foreach ($rows as $row)
        <tr>
            <td>{{ $row->menu_id }}</td>
            <td>{{ $row->menu_nama }}</td>
            <td>{{ $row->menu_hrg }}</td>
            <td>
                <a href="{{ url('menu/edit/' . $row->menu_id) }}" class="btn btn-warning">Edit</a>
            </td>
            <td>
                <form action="{{ url('menu/' . $row->menu_id) }}" method="post" onsubmit="return confirm('Are you sure?')">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>


@endsection