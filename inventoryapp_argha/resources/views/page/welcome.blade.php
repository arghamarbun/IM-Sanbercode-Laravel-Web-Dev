@extends('layout.master')
@section('title')
    Welcome
@endsection
@section('content')
    <h1>Selamat Datang {{$firstname}} {{$lastname}}!</h1>
        <h2>Terima kasih telah bergabung di Sanberbook. Social Media kita bersama!</h2>
        <a href="/">Kembali Ke Halaman Awal</a>
@endsection