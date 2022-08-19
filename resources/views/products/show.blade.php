@extends('layouts.master')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Products Show</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">Product Show</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <div class="card card-primary card-outline">
                    <div class="card-body">
                        <h5 class="card-title">Product Info</h5><br><br>
                        <div class="card-body">
                            <table class="table table-sm table-bordered table-hover">
                                <tr>
                                    <td>Product name :</td>
                                    <td><b>{{ $product->name ?? '' }}</b></td>
                                </tr>
                                <tr>
                                    <td>Category :</td>
                                    <td><b>{{ $product->category->name ?? '' }}</b></td>
                                </tr>
                                <tr>
                                    <td>Brand :</td>
                                    <td><b>{{ $product->brand->name ?? '' }}</b></td>
                                </tr>
                                <tr>
                                    <td>Cost Price(₱) :</td>
                                    <td><b>{{ $product->cost_price ?? '' }}</b></td>
                                </tr>
                                <tr>
                                    <td>Year :</td>
                                    <td><b>{{ $product->year ?? '' }}</b></td>
                                </tr>
                                <tr>
                                    <td>Description :</td>
                                    <td><b>{{ $product->description ?? '' }}</b></td>
                                </tr>
                                <tr>
                                    <td>Status :</td>
                                    <td><b>{{ $product->status ? 'Active' : 'Inactive' }}</b></td>
                                </tr>
                            </table>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('products.index')}}" class="btn btn-sm btn-dark">
                                <i class="fa fa-arrow-left"></i> &nbsp; Back
                            </a>   
                        </div>  
                     </div>
                </div><!-- /.card -->
            </div>
            <div class="col-sm-6">
                <div class="card card-primary card-outline">
                    <div class="card-body">
                        <h5 class="card-title">Image</h5><br><br>
                        <div class="card-body text-center">
                            <img width="350px" src="{{ asset('storage/product_images/'. $product->image) }}" alt="">
                
                        </div>                          
                    </div>         
                 </div><!-- /.card -->  
                 <div class="card card-primary card-outline">
                    <div class="card-body">
                        <h5 class="card-title">Product Stock</h5><br><br>
                        <div class="card-body"> 
                            <table class="table table-sm table-bordered table-hover">
                                @foreach($product->product_stocks as $p_stock)
                                    <tr>
                                        <td>{{ $p_stock->size->size ?? '' }}</td>
                                        <td>{{ $p_stock->location ?? '' }}</td>
                                        <td>{{ $p_stock->quantity ?? 0 }}</td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>                          
                    </div>
                </div><!-- /.card -->           
            </div>
        </div>    
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->

@endsection
