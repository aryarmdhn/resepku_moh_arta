@extends('layouts.main')

@section('container')

@if(session()->has('success'))
    <div class="alert alert-success" role="alert">
       {{ session('success') }}
    </div>
@endif
    <h1 class="mb-5 text-center">{{ $title }}</h1>
     <div class="container">
        <div class="row">
            @foreach ($posts as $post)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="https://source.unsplash.com/800x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                    <div class="card-body">
                    <h5 class="card-title"><a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a> </h5>
                    <p class="card-text">{{ $post->deskripsi }}</p>
                    <a href="#" class="btn btn-primary btn-center text-decoration-none">Suka</a>        
                    </div>
                </div>
            </div>                           
            @endforeach
        </div>
    </div>
    

    <footer class="fixed">
        <div class="row">
            <h5 class="text-center bg-secondary p-3">Made by Moh. Arta Ramadhanu</h5>
        </div>
      </footer>
@endsection