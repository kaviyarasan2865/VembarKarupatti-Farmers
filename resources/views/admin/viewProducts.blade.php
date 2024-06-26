@extends('admin.dashboard')

@section('content')

<div>
    <h2 class="text-center">Product List</h2>
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

    <div class="row">
        @foreach ($products as $product)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top" alt="Product Image" style="height:200px">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">{{ $product->description }}</p>
                        <p class="card-text">Price: INR {{ $product->price }}/kg</p>
                        <p class="card-text">Stock: {{ $product->stock }} kg</p>
                        <a href="{{route('edit.product',$product->id)}}" class="btn btn-primary">Edit Product</a>
                        <a href="{{route('delete.product',$product->id)}}" class="btn btn-danger">Delete Product</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection
