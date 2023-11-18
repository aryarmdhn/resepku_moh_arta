@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-5">
        <main class="form-registration">
            <h1 class="h3 mb-3 fw-normal text-center">Please Register</h1>
            <form action="/register" method="post">
                @csrf
                <div class="form-floating">
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="your name" required value="{{ old('name') }}">
                    <label for="name">Nama</label>
                </div>
                @error('name')
                    <div class="invalid-feedback">
                        Please choose a name.
                    </div>
                @enderror
                <div class="form-floating">
                    <input type="text" name="username" class="form-control" id="username" placeholder="your username" required value="{{ old('username') }}">
                    <label for="username">User Name</label>
                    @error('username')
                    <div class="invalid-feedback">
                        Please choose a username.
                    </div>
                    @enderror
                </div>
              <div class="form-floating">
                <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                <label for="email">Email address</label>
                @error('email')
                <div class="invalid-feedback">
                    Please choose a email.
                </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required >
                <label for="password">Password</label>
                @error('password')
                <div class="invalid-feedback">
                    Password 8 karakter..
                </div>
                 @enderror
              </div>
              <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Register</button>
            </form>
            <small  class="d-block text-center mt-2">Sudah Login? <a href="/login">Login now</a></small>
        </main>
    </div>
</div>

<footer class="fixed-bottom">
    <div class="row">
        <h5 class="text-center bg-secondary p-3">Made by Moh. Arta Ramadhanu</h5>
    </div>
  </footer>
@endsection