@extends('layouts.app')

@section('content')
    <div class="col-md-10 offset-1 mt-5">
    <div class="card mb-5">
        <div class="card-header">
            <a href="{{route('post.index')}}" class="btn btn-primary btn-lg float-right">Back to all posts</a>
        <h2>Create Post</h2>
        </div>
        <div class="card-body">
    <form action="{{route('post.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" name="title" value="{{old('title')}}" class="form-control {{$errors->has('title') ? 'is-invalid' :''}}">
            @if($errors->has('title'))
            <div class="invalid-feedback">
                <strong>{{$errors->first('title')}}</strong>
            </div>
            @endif
        </div>
        <div class="form-group">
            <label for="body">Content:</label>
            <textarea name="body" class="form-control {{$errors->has('body') ? 'is-invalid' :''}}" rows="10">{{old('body')}}</textarea>
        </div>
        @if($errors->has('body'))
            <div class="invalid-feedback">
                <strong>{{$errors->first('body')}}</strong>
            </div>
        @endif
        <div class="form-group mt-5">
            <button  type="submit" class="btn-danger btn btn-lg btn-block ">Submit Post</button>
        </div>
    </form>
    </div>
    </div>
    </div>
        <div class="col-md-10 offset-1 mt-5">
    @endsection