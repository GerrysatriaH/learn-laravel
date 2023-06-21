@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $posts['name'] }}</h2>
        <h5>{{ $posts['price'] }}</h5>

        {{-- With Blade Escape Character--}}
        <p>{{ $posts['desc'] }}</p>

        {{-- Without Blade Escape Character, So if there is tag html or SQL query in value, then tag or SQL query will be execute by program--}}
        {{-- {!! $posts['desc'] !!} --}}
    </article>
    <a href="/product">Back</a>
@endsection