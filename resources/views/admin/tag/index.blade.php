@extends('layouts.backend.app')

@section('title', 'Tag')

@section('content')
    <div class=" content-area">
        <div class="page-header">
            <a class="btn btn-primary" href="{{route('admin.tag.create')}}"><i class="fa fa-plus mr-2"></i>
                <b>Add New Tag</b></a>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">ALL TAGS</h3>
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
                            @foreach($tags as $key=>$tag)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td>{{$tag->name}}</td>
                                <td>{{$tag->created_at}}</td>
                                <td>{{$tag->updated_at}}</td>
                                <td class="text-center">
                                    <form id="delete-form-{{$tag->id}}" action="{{route('admin.tag.destroy', $tag->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{route('admin.tag.edit', $tag->id)}}" class="btn btn-primary"> <i class="fa fa-edit"></i></a>

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
