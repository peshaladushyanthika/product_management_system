@extends('layouts.app')

@section('content')

@if(session('success'))
   <div class="alert alert-success">
      {{ session('success') }}
   </div>
@endif
<div class="container">
<div class="text-right mb-3">
      <a href="{{ route('products.create') }}" class="btn btn-primary">Add Product</a>
   </div>
<h1 class="mb-4 mt-5">Products List</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>${{ $product->price }}</td>
                    <td><img src="{{ asset('storage/' . $product->image) }}" alt="Image" width="50"></td>
                    <td>
                        <a href="{{ route('products.edit', $product) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
