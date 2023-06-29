@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Posts</h1>      
    </div>
    <div class="table-responsive">
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
                            <td>{{ $item->category->name }}</td>
                            <td>{{ $item['price'] }}</td>
                            <td>{{ $item['qty'] }}</td>
                            <td>
                                <a href="/dashboard/posts/{{ $item->slug }}" class="badge bg-info">
                                    <span data-feather="eye"></span>
                                </a>
                                <a href="http://" class="badge bg-warning">
                                    <span data-feather="edit"></span>
                                </a>
                                <a href="http://" class="badge bg-danger">
                                    <span data-feather="trash"></span>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr><td colspan="6">No data found</td></tr>
                @endif    
            </tbody>
        </table>
    
        {{ $posts->links() }}
    </div>
@endsection