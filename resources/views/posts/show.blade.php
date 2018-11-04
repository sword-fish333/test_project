@extends('layouts.app')

@section('content')
    <div class="col-md-10 offset-1 mt-5">

            <div class="card ">


                <div class="card-header">
                    <a class="btn-outline-primary btn btn-lg float-right" href="{{route('post.index')}}">Go back</a>
                    <h1>{{$post->title}}</h1>
                    <p class="lead text-info">writen by: {{$post->user->name}}
                        <span class="mute">on: </span>{{$post->created_at->diffForHumans()}}</p>
                </div>
                <div class="card-body">
                    <p>{{$post->body}}</p>
                </div>

            </div>

    </div>
@endsection