@extends('layouts.backend.app')

@section('title', 'Category')

@section('content')
    <div class=" content-area">
        <div class="page-header">
            <a class="btn btn-primary" href="{{route('admin.category.create')}}"><i class="fa fa-plus mr-2"></i>
                <b>Add New Category</b></a>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">ALL Category</h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table card-table table-vcenter text-nowrap text-center">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Create At</th>
                                <th>Update At</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $key=>$category)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td>{{$category->name}}</td>
                                <td>{{$category->created_at}}</td>
                                <td>{{$category->updated_at}}</td>
                                <td class="text-center">
                                    <form id="delete-form-{{$category->id}}" action="{{route('admin.category.destroy', $category->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{route('admin.category.edit', $category->id)}}" class="btn btn-primary"> <i class="fa fa-edit"></i></a>

                                        <button class="btn btn-danger" type="submit"> <i class="fa fa-close"></i></button>

                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                            <tfooter>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Create At</th>
                                    <th>Update At</th>
                                    <th>Action</th>
                                </tr>
                            </tfooter>
                        </table>
                    </div>
                    <!-- table-responsive -->
                </div>
            </div>
        </div>

    </div>
@endsection
