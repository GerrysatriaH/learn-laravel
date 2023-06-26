@extends('layouts.main')

@section('container')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama kategori</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $item)
                <tr>
                    <th scope="row">{{ $item['id'] }}</th>
                    <td>{{ $item['name'] }}</td>
                    <td>
                        <a href="/categories/{{ $item['slug'] }}" class="btn btn-primary">Show</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection