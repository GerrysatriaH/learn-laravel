@extends('layouts.main')

@section('container')
    <div class="row">
        <div class="col-md-6">
            <h3 class="mb-4">{{ $title }}</h3>
        </div>
        <div class="col-md-6">
            <form action="/product" method="get">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search here" name="search" value="{{ request('search') }}">
                    <button class="btn btn-primary" type="button" id="button-addon2">Search</button>
                </div>
            </form>
        </div>
    </div>
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
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $item['name'] }}</td>
                        <td>
                            <a href="/product?category={{ $item->category->slug }}" class="text-decoration-none">{{ $item->category->name }} </a>
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

    {{ $posts->links() }}
@endsection