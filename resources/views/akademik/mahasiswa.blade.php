@extends('layouts.main')
@section('title')

@section('content')
<h1>Daftar Mahasiswa jurusan TI</h1>
<ol>
    @foreach ($mhs as $namaMhs)
    <li>{{ $namaMhs }}</li>
    @endforeach

</ol>
@endsection