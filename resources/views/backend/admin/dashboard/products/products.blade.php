@extends('backend.admin.dashboard.layouts.master')

@section('content')

@section('title', 'dashboard -')


<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') {{ config('app.name', 'Ecomm') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />


 <!-- CSS Files -->
 <link rel="stylesheet" href="{{asset('admin/assets/css/bootstrap.min.css')}}" />
 <link rel="stylesheet" href="{{asset('admin/assets/css/plugins.min.css')}}" />
 <link rel="stylesheet" href="{{asset('admin/assets/css/kaiadmin.min.css')}}" />

 <!-- CSS Just for demo purpose, don't include it in your project -->
 <link rel="stylesheet" href="{{asset('admin/assets/css/demo.css')}}" />


 <style>
    .products_imag{
        height: 60px;
    }
 </style>
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>

<div class="container py-5">
    <div class="card shadow-sm rounded-4">
        <div class="card-body">

            <div class="row align-items-center mb-4">
                <div class="col-md-6">
                    <h5 class="card-title mb-0">Top Products</h5>
                </div>
                <div class="col-md-6 text-md-end text-start mt-2 mt-md-0">
                    <a href="{{ route('addproduct') }}" class="btn btn-primary">
                        <i class="bi bi-plus-lg me-1"></i> Add Product
                    </a>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)

                        <tr>
                            <td>{{ $product->name }}</td>
                            <td>${{ $product->price }}</td>
                            <td><img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="products_imag "></td>
                            <td>{{ \Carbon\Carbon::parse($product->date)->format('d M Y') }}</td>
                            <td>
                               
                                <form action="{{route('products.status', $product->id)}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit"
                                        class="btn {{ $product->status ? 'btn-success' : 'btn-danger' }}">
                                        {{ $product->status ? 'Active' : 'Inactive' }}
                                    </button>

                                </form>

                                
                            </td>
                            <td class="border border-gray-300 px-4 py-2">
                                <a href="{{ route('update.product', $product->id) }}" class="btn btn-info">Edit</a>

                                <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
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
        </div>
    </div>
</div>


<script src="{{asset('admin/assets/js/core/bootstrap.min.js')}}"></script>
<script src="{{asset('admin/assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('admin/assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
<script src="{{asset('admin/assets/js/plugins/chartjs.min.js')}}"></script>

    
</body>
</html>
@endsection