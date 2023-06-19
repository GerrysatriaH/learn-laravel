@extends('layouts.main')

@section('container')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Produk</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Harga</th>
                <th scope="col">Qty</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $item)
                <tr>
                    <th scope="row">{{ $item['id'] }}</th>
                    <td>{{ $item['name'] }}</td>
                    <td>{{ $item['desc'] }}</td>
                    <td>{{ $item['price'] }}</td>
                    <td>{{ $item['qty'] }}</td>
                    <td>
                        <a href="/product/{{ $item['id'] }}">Show</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

