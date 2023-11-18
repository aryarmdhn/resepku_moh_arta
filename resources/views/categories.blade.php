@extends('layouts.main')

@section('container')
    <h1 class="mb-5 text-center">Kategori Resep</h1>

    <div class="container">
        <div class="row mb-5 mt-6">
            @foreach ($categories as $category)
            <div class="col-md-4 mt-3 mb-3">
                <a href="/categories/{{ $category->slug }}">
                    <div class="card text-white">
                        <img src="https://source.unsplash.com/800x400?{{ $category->name }}" class="card-img-top" alt="{{ $category->name }}">
                        <div class="card-img-overlay d-flex align-items-center">
                        <h5 class="card-title text-center flex-fill fs-4">{{ $category->name }}</h5>
                        </div>
                    </div>
                </a>
            </div>                           
            @endforeach
        </div>
    </div> 
@endsection