@extends('layout.master')

@section('judul', 'Detail Cast')

@section('content')
    <h1 class="text-primary">{{ $castById->nama }}</h1>
    <p>{{ $castById->umur }} Tahun</p>
    <p>{{ $castById->bio }}</p>
    <a href="/cast" class="btn btn-primary btn-sm my-3">Kembali</a>
@endsection