@extends('layouts.master')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="content">
        <div class="container-fluid">
             <!-- Small boxes (Stat box) -->
            <div class="row mt-2">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{ $total_users ?? 0 }}</h3>

                            <p>Users</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-users"></i>
                        </div>
                        <a href=" {{ route('users.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{ $total_products ?? 0 }}</h3>

                            <p>Products</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-list"></i>
                        </div>
                        <a href="{{ route('products.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>6</h3>

                            <p>Stocks In</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-cart-plus"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>4</h3>

                            <p>Return Products</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-list"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
        
            <div class="card card-primary card-outline">
                <div class="card-body">
                    <h5 class="card-title">Product List</h5><br><br>
                    <a href="{{ route('products.create')}}" class="btn btn-sm btn-primary">
                        <i class="fa fa-plus"></i> &nbsp; Add Product
                    </a><br><br>

                    <table class="table table-bordered data-table">
                        <thead>
                            <tr>
                                <th>#SL</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Category</th>
                                <th>Brand</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($recent_products)
                                @foreach($recent_products as $key => $recent_product)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{$recent_product->name ?? ''}}</td>
                                        <td>
                                            <img width="64px" src="{{ asset('storage/product_images/'. $recent_product->image) }}" alt="">
                                        </td>   
                                        <td>{{$recent_product->category->name ?? ''}}</td>
                                        <td>{{$recent_product->brand->name ?? ''}}</td>
                                        <td class="w-20">
                                            <a href="{{ route('products.show', $recent_product->id) }}" class="btn btn-primary">
                                                <i class="fa fa-desktop"></i> Show
                                            </a>
                                            
                                            &nbsp;&nbsp;

                                            <a href="{{ route('products.edit', $recent_product->id) }}" class="btn btn-info">
                                                <i class="fa fa-edit"></i> Edit
                                            </a>

                                            &nbsp;&nbsp;

                                            <a href="javascript:;" class="btn btn-danger sa-delete" data-form-id="product-delete-{{ $recent_product->id }}">
                                                <i class="fa fa-trash"></i> Delete
                                            </a>

                                            <form id="product-delete-{{ $recent_product->id }}" action="{{ route('products.destroy', $recent_product->id )}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach    
                            @endif
                        </tbody>
                    </table>
                </div>
            </div><!-- /.card -->
        </div>
    </div>   
@endsection
