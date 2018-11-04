@extends('layouts.app')

@section('content')
    <div class="col-md-10 offset-1 mt-5">
        <a href="{{route('post.create')}}" class="btn btn-primary mb-5 offset-5 btn-lg">Create new Post</a>
        @foreach($posts as $post)
        <div class="card ">
        <div class="card-header">
            <form action="{{route('post.destroy',$post->id)}}" method="post" class="float-right">
            @csrf
                {{method_field('DELETE')}}
                <button class="btn btn-outline-danger btn-lg" type="Submit">Delete</button>
            </form>
            <h1>{{$post->title}}</h1>
            <p class="lead text-info">writen by: {{$post->user->name}}
                <span class="mute">on: </span>{{$post->created_at->diffForHumans()}}</p>
        </div>
            <div class="card-body">
                <p>{{str_limit($post->body,250,"...")}}</p>
                <a href="{{route('post.show',$post->id)}}" class="btn btn-info btn-lg">Read more</a>
            </div>

        </div>
            @endforeach
        <div>
        <div class="d-flex justify-content-center m-2">{{$posts->links()}}</div>
    </div>
    @endsection