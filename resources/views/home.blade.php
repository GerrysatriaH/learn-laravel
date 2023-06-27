@extends('layouts.main')

@section('container')
<div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
            <img src="https://source.unsplash.com/400x300/?product" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
        </div>
        <div class="col-lg-6">
            <h1 class="display-5 fw-bold lh-1 mb-3">Selamat Datang di Laracrud</h1>
            <p class="lead">LaraCRUD adalah sebuah aplikasi CRUD (Create, Read, Update, Delete) yang dikembangkan menggunakan framework Laravel. Aplikasi ini dirancang untuk memudahkan pengguna dalam mengelola data dengan operasi dasar seperti membuat, membaca, memperbarui, dan menghapus data dalam basis data.</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <a type="button" class="btn btn-dark btn-lg px-4 me-md-2" href="/product">Go to Product</a>
                {{-- <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button> --}}
            </div>
        </div>
    </div>
  </div>
@endsection