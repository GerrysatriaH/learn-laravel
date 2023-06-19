@extends('layouts.main')

@section('container')
    @foreach ($posts as $item)
        <article>
            <h2>
                <a href="/posts/{{ $item['slug'] }}">{{ $item['title'] }}</a>
            </h2>
            <h5>By : {{ $item['author'] }}</h5>
            <p>{{ $item['body'] }}</p>
        </article>
    @endforeach
@endsection

