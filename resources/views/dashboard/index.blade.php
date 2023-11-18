@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2 text-center">Welcome Admin {{ auth()->user()->name }}</h1>
    </div>

    <div class="nav-item fs-5">
        <a class="nav-link" href="/posts">
        Kembali ke halaman utama
        </a>
    </div>
@endsection