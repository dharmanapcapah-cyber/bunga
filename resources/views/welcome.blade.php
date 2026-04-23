@extends('layout.master')
@section('title', 'shop @garden')
@section('konten')

    <div class="container">
        <h1>Selamat Datang  {{ $nama ?? 'Guest' }} </h1>
        <p>Selamat datang di website kami. Semoga Anda mendapatkan pengalaman terbaik di sini.</p>
        
        <a href="/" class="btn">kembali</a>
    </div>
@endsection