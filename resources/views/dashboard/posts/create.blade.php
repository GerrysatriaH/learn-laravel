@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create Data</h1>      
    </div>
    <div class="col-lg-8">
        <form action="/dashboard/posts" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3"> 
                <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('name') is-invalid @endError" id="name" name="name" value="{{ old('name') }}" required autofocus>
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @endError
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputSlug" class="col-sm-2 col-form-label">Slug</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control  @error('slug') is-invalid @endError" value="{{ old('slug') }}" id="slug" name="slug" required readonly>
                </div>
                @error('slug')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @endError
            </div>
            <div class="row mb-3">
                <label for="inputCategory" class="col-sm-2 col-form-label">Category</label>
                <div class="col-sm-10">
                    <select name="category_id" id="category_id" class="form-select">
                        @foreach ($category as $c)
                            @if (old('category_id') == $c->id)
                                <option value="{{ $c->id }}">{{ $c->name }}</option>
                            @else
                                <option value="{{ $c->id }}">{{ $c->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="image" class="col-sm-2 col-form-label">Image</label>
                <img class="img-preview img-fluid col-sm-5 mb-3">
                <div class="col-sm-10">
                    <input class="form-control @error('image') is-invalid @endError" type="file" id="image" name="image" onchange="previewImage()">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPrice" class="col-sm-2 col-form-label">Price</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control @error('price') is-invalid @endError" id="price" name="price" value="{{ old('price') }}">
                    @error('price')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @endError
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputQty" class="col-sm-2 col-form-label">Qty</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control @error('qty') is-invalid @endError" id="qty" name="qty" value="{{ old('qty') }}">
                    @error('qty')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @endError
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>

    <script>
        const name = document.querySelector('#name');
        const slug = document.querySelector('#slug');
        name.addEventListener('change', function(){
            fetch('/dashboard/posts/checkSlug?name='+name.value)
            .then(response => response.json())
            .then(data => slug.value=data.slug)
        })

        function previewImage(){
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent){
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection