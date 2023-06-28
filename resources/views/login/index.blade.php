@extends('layouts.main')
@section('container')
<div class="row justify-content-center">
    <div class="col-lg-4 ">
        @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if(session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <main class="form-signin w-100">
            <h1 class="h3 mb-3 fw-normal text-center">Please sign in</h1>
            <form action="/login" method="post">
                @csrf
                <div class="form-floating mb-3">
                    <input type="email" class="form-control @error('email') is-invalid @endError" id="floatingInput" name="email" 
                           placeholder="name@example.com" value="{{ old('email') }}" autofocus required>
                    <label for="floatingInput">Email address</label>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @endError
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control @error('password') is-invalid @endError" id="floatingPassword" name="password" 
                           placeholder="Password" required>
                    <label for="floatingPassword">Password</label>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @endError
                </div>
                <button class="btn btn-primary w-100 my-3" type="submit">Sign in</button>
                <small>Not Registered ? <a href="/register">Register Now</a></small>
                <p class="mt-5 mb-3 text-body-secondary">© 2023 Gerry Satria Halim</p>
            </form>
        </main>
    </div>
</div>
@endsection