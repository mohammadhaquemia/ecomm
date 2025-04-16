
@extends('backend.admin.dashboard.layouts.master')

@section('content')

@section('title', 'dashboard -')


<div>
    <div class="container-fluit">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    
             
               
                    <div class="card-body">
                    <div class="row align-items-center mb-4">
                    <div class="col-md-6">
                    <h5 class="card-title mb-0">Add Products</h5>
                    </div>
                    <div class="col-md-6 text-md-end text-start mt-2 mt-md-0">
                    <a href="{{ route('products') }}" class="btn btn-primary">
                            <i class="bi bi-plus-lg me-1"></i>Brack
                    </a>
                    </div>
                  </div>
                        <form action="{{ route('storeproduct') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="name">Product Name</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Product Name">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="price">Product Price</label>
                                        <input type="number" class="form-control" id="price" name="price" placeholder="Product Price">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="image">Product Image</label>
                                        <input type="file" class="form-control" id="image" name="image" placeholder="Product Image">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="date">Product Date</label>
                                        <input type="date" class="form-control" id="date" name="date" placeholder="Product Date">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="status">Product Status</label>
                                        <select id="status" name="status" class="w-full p-2 border rounded" >
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection