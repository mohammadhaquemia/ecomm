@extends('backend.admin.dashboard.layouts.master')

@section('title', 'Edit Product')

@section('content')
<div class="container py-5">
    <div class="card shadow-sm rounded-4">
        <div class="card-body">
            <h4 class="mb-4">Edit Product</h4>

            <form action="{{ route('update.product', $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="name" class="form-label">Product Name</label>
                    <input type="text" class="form-control" name="name" value="{{ $product->name }}" required>
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" step="0.01" class="form-control" name="price" value="{{ $product->price }}" required>
                </div>

                <div class="mb-3">
                    <label for="date" class="form-label">Date</label>
                    <input type="date" class="form-control" name="date" value="{{ $product->date }}" required>
                </div>

                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select name="status" class="form-control" required>
                        <option value="1" {{ $product->status ? 'selected' : '' }}>Active</option>
                        <option value="0" {{ !$product->status ? 'selected' : '' }}>Inactive</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Product Image</label><br>
                    <img src="{{ asset($product->image) }}" width="120" class="mb-2 rounded">
                    <input type="file" class="form-control" name="image">
                </div>

                <button type="submit" class="btn btn-success">Update</button>
                <a href="{{ route('products') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection
