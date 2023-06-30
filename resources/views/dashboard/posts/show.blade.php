@extends('dashboard.layouts.main')

@section('container')

    <div class="action-button mt-4">
        <a href="/dashboard/posts" class="btn btn-success small">
            <span data-feather="arrow-left"></span> Back
        </a>
        <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning small">
            <span data-feather="edit"></span> Edit
        </a>
        <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ini ?')">
                <span data-feather="trash"></span> Delete
            </button>
        </form>
    </div>
    
    <div class="card my-3" style="max-width: 1080px;">
        <div class="row g-0">
            <div class="col-md-3">
                @if ($post->image)
                    <img src="{{ asset('storage/'.$post->image) }}" class="img-fluid rounded-start" alt="{{ $post['name'] }}" width="250px" height="250px">
                @else
                    <img src="https://source.unsplash.com/250x250/?product" class="img-fluid rounded-start" alt="{{ $post['name'] }}">
                @endif
            </div>
            <div class="col-md-9">
                <div class="card-body">
                    {{-- With Blade Escape Character--}}
                    <h5 class="card-title">{{ $post['name'] }}</h5>
                    <p class="card-text">Rp. {{ $post['price'] }}</p>
                    <p class="card-text">Kategori : 
                        <a href="/product?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }} </a>
                    </p>
                    <p class="card-text"><small class="text-body-secondary">Stok : {{ $post['qty'] }}</small></p>
                    {{-- Without Blade Escape Character, So if there is tag html or SQL query in value, then tag or SQL query will be execute by program--}}
                    {{-- Example : {!! $post['desc'] !!} --}}
                </div>
            </div>
        </div>
    </div>
@endsection