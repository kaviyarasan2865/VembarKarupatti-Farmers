<!-- resources/views/products/edit.blade.php -->

@extends('admin.dashboard')

@section('content')
<div>
    <h1 class="text-center">Edit Product</h1>

    <!-- Display any form validation errors and success messages -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="name">Product Name<span style="color:red">*</span></label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" required>
            </div>

            <div class="form-group col-md-6">
                <label for="description">Description<span style="color:red">*</span></label>
                <textarea class="form-control" id="description" name="description" rows="3">{{ $product->description }}</textarea>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="price">Price per kg<span style="color:red">*</span></label>
                <input type="text" class="form-control" id="price" name="price" value="{{ $product->price }}" required>
            </div>

            <div class="form-group col-md-6">
                <label for="stock">Stock in kg<span style="color:red">*</span></label>
                <input type="number" class="form-control" id="stock" name="stock" value="{{ $product->stock }}" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="image">Image 1</label>
                <input type="file" class="form-control-file" id="image" name="image">
                @if ($product->image)
                    <img src="{{ asset('storage/' . $product->image) }}" class="img-thumbnail mt-2" width="150">
                @endif
            </div>

            <div class="form-group col-md-4">
                <label for="image2">Image 2</label>
                <input type="file" class="form-control-file" id="image2" name="image2">
                @if ($product->image2)
                    <img src="{{ asset('storage/' . $product->image2) }}" class="img-thumbnail mt-2" width="150">
                @endif
            </div>

            <div class="form-group col-md-4">
                <label for="image3">Image 3</label>
                <input type="file" class="form-control-file" id="image3" name="image3">
                @if ($product->image3)
                    <img src="{{ asset('storage/' . $product->image3) }}" class="img-thumbnail mt-2" width="150">
                @endif
            </div>
        </div>

        <button type="submit" class="btn btn-warning mx-auto d-block">Update Product</button>
    </form>
</div>

@endsection
