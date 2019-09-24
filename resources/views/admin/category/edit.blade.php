@extends('layouts.backend.app')

@section('title', 'Tag')

@section('content')
    <div class=" content-area">
        <div class="page-header">
            <h4 class="page-title"></h4>
        </div>
        <div class="row row-deck">
            <div class="col-lg-12">
                <form method="post" class="card" action="{{route('admin.tag.update', $tag->id)}}">
                    @csrf
                    @method('PUT')
                    <div class="card-header">
                        <h3 class="card-title">EDIT TAG</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label class="form-label">Tag Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Tag Name" value="{{$tag->name}}">
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <div class="d-flex">
                            <a href="{{route('admin.tag.index')}}" class="btn btn-danger">BACK</a>
                            <button type="submit" class="btn btn-primary ml-auto">UPDATE</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
