@extends('layouts.main')

@section('container')
    <h3 class="mb-4">{{ $title }}</h3>
    <table class="table table-striped text-center">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Produk</th>
                <th scope="col">Kategori</th>
                <th scope="col">Harga</th>
                <th scope="col">Qty</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody class="align-middle">
            @if ($posts->count())
                @foreach ($posts as $item)
                    <tr>
                        <th scope="row">{{ $item['id'] }}</th>
                        <td>{{ $item['name'] }}</td>
                        <td>
                            <a href="/categories/{{ $item->category->slug }}" class="text-decoration-none">{{ $item->category->name }} </a>
                        </td>
                        <td>{{ $item['price'] }}</td>
                        <td>{{ $item['qty'] }}</td>
                        <td>
                            <a href="/product/{{ $item['slug'] }}" class="btn btn-primary">Show</a>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr><td colspan="6">No data found</td></tr>
            @endif    
        </tbody>
    </table>
@endsection