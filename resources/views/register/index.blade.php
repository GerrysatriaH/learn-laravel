@extends('layouts.main')
@section('container')
<div class="row justify-content-center">
    <div class="col-lg-4 ">
        <main class="form-signin w-100">
            <h1 class="h3 mb-4 fw-normal text-center">Please Register</h1>
            <form action="/register" method="post">
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" class="form-control @error('name') is-invalid @endError" 
                           id="name" placeholder="Name" name="name" value="{{ old('name') }}"required>
                    <label for="floatingInput">Name</label>
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @endError
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control @error('username') is-invalid @endError" 
                           id="username" placeholder="Username" name="username"value="{{ old('username') }}"required>
                    <label for="floatingInput">Username</label>
                    @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @endError
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control @error('email') is-invalid @endError" 
                           id="email" placeholder="name@example.com" name="email" value="{{ old('email') }}"required>
                    <label for="floatingInput">Email address</label>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @endError
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control @error('password') is-invalid @endError" 
                           id="password" placeholder="Password" name="password" required>
                    <label for="floatingPassword">Password</label>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @endError
                </div>
                <button class="btn btn-primary w-100 my-3" type="submit">Regist</button>
                <small>Already Registered ? <a href="/login">Sign in</a></small>
                <p class="mt-5 mb-3 text-body-secondary">© 2023 Gerry Satria Halim</p>
            </form>
        </main>
    </div>
</div>
@endsection