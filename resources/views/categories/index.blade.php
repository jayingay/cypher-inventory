@extends('layouts.master')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Categories</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">Category List</li>
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
                        <h5 class="card-title">Category List</h5><br><br>
                   
                        <a href="{{ route('categories.create')}}" class="btn btn-sm btn-primary">
                            <i class="fa fa-plus"></i> &nbsp; Add Category
                        </a><br><br>
                        <example-component></example-component>
                        <table class="table table-bordered data-table">
                            <thead>
                                <tr>
                                    <th>#SL</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($categories)
                                    @foreach($categories as $key => $category)
                                        <tr>
                                            <td>{{ ++$key }}</td>
                                            <td class="w-50">{{$category->name ?? ''}}</td>
                                            <td>
                                                <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-info">
                                                    <i class="fa fa-edit"></i> Edit
                                                </a>

                                                &nbsp;&nbsp;

                                                <a href="javascript:;" class="btn btn-danger sa-delete" data-form-id="category-delete-{{ $category->id }}">
                                                    <i class="fa fa-trash"></i> Delete
                                                </a>

                                                <form id="category-delete-{{ $category->id }}" action="{{ route('categories.destroy', $category->id )}}" method="POST">
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
