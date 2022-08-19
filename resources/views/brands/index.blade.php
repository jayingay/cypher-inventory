@extends('layouts.master')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Brands</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">Brand List</li>
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
            <div class="col-lg-12">

                <div class="card card-primary card-outline">
                    <div class="card-body">
                        <h5 class="card-title">Brand List</h5><br><br>

                        <a href="{{ route('brands.create')}}" class="btn btn-sm btn-primary">
                            <i class="fa fa-plus"></i> &nbsp; Add Brand
                        </a><br><br>

                        <table class="table table-bordered data-table">
                            <thead>
                                <tr>
                                    <th>#SL</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($brands)
                                    @foreach($brands as $key => $brand)
                                        <tr>
                                            <td>{{ ++$key }}</td>
                                            <td class="w-50">{{$brand->name ?? ''}}</td>
                                            <td>
                                                <a href="{{ route('brands.edit', $brand->id) }}" class="btn btn-info">
                                                    <i class="fa fa-edit"></i> Edit
                                                </a>

                                                &nbsp;&nbsp;

                                                <a href="javascript:;" class="btn btn-danger sa-delete" data-form-id="brand-delete-{{ $brand->id }}">
                                                    <i class="fa fa-trash"></i> Delete
                                                </a>

                                                <form id="brand-delete-{{ $brand->id }}" action="{{ route('brands.destroy', $brand->id )}}" method="POST">
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
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->

@endsection
