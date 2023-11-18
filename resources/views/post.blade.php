@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                
                <img src="https://source.unsplash.com/1200x600?{{ $post->category->name }}" class="img-fluid" alt="{{ $post->category->name }}">
                <p class="mt-2">By.<a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> {{ $post->name }} in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

                <h1 class="mb-3">{{ $post->title }}</h1>

                <article class="my-3 fs-5">
                    <p>{{ $post->deskripsi }}</p>
                </article>
  
                <article class="my-3 fs-5">
                    <p>{{ $post->bahan }}</p>
                </article>
                <article class="my-3 fs-5">
                    <p>{{ $post->langkah }}</p>
                </article>
                
                 <a href="/posts" class="btn btn-info mt-3 mb-5">Kembali</a>
            </div>
        </div>
    </div>


    
     
    <footer class="fixed">
        <div class="row">
            <h5 class="text-center bg-secondary p-3">Made by Moh. Arta Ramadhanu</h5>
        </div>
      </footer>
    
@endsection