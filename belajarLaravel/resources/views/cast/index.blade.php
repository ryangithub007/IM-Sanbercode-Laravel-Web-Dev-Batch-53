@extends('layout.master')

@section('judul', 'Cast')

@section('content')
    <a href="/cast/create" class="btn btn-primary btn-sm my-3">Tambah Cast</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($cast as $keys => $item)
        <tr>
            <th scope="row">{{$keys + 1}}</th>
            <td>{{$item->nama}}</td>
            <td>
                <form action="/cast/{{$item->id}}" method="POST">
                    @csrf
                    @method('delete')
                    <a href="/cast/{{$item->id}}" class="btn btn-info btn-sm">Detail</a>
                    <a href="/cast/{{$item->id}}/edit" class="btn btn-warning btn-sm">Update</a>
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
          </tr>
        @empty
            <tr>
                <td>Tidak ada data Cast</td>
            </tr>
        @endforelse
      
    </tbody>
  </table>
@endsection
