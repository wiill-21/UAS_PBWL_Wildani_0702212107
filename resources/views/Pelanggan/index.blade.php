@extends('layouts.app')
@section('content')


      <h2>Pelanggan</h2>

      <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-sm btn-primary" onclick="window.location='{{ url('pelanggan/create') }}'">
                <i class="fas fa-plus solid"></i>Add New Pelanggan
            </button>
        </div>
        <div class="card-body">
            <table class="table table-sm table-striped table-bordered">    
        <tr>
        <th>ID</th>
        <th>NAMA</th>
        <th>NOMOR HP</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>

    @foreach ($rows as $row)
        <tr>
            <td>{{ $row->plgn_id }}</td>
            <td>{{ $row->plgn_nama }}</td>
            <td>{{ $row->plgn_no }}</td>
            <td>
                <a href="{{ url('pelanggan/edit/' . $row->plgn_id) }}" class="btn btn-warning">Edit</a>
            </td>
            <td>
                <form action="{{ url('pelanggan/' . $row->plgn_id) }}" method="post" onsubmit="return confirm('Are you sure?')">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
</div>

@endsection