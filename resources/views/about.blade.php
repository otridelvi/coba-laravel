@extends('layouts.main')
@section('container')
    <h1>Halaman About</h1>
    <h4>{{ $name }}</h4>
    <h4>{{ $email }}</h4>
    <img src="img/{{ $picture }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle">
@endsection
