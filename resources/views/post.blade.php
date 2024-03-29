@extends('layouts.main')

@section('container')
    <h3 class="mb-4">{{ $title }}</h3>
    <div class="card mb-3" style="max-width: 1080px;">
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