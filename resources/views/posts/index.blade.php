@extends('layouts.app')

@section('header')
    PostsController
@endsection
@section('content')
  <h1>Posts</h1>
  @if(count($posts) > 0)
    @foreach ($posts as $post)
      <div class="card p-3 container">
        <div class="col-md-4">
          <img style='width: 400px;' src="/storage/cover_images/{{$post->cover_image}}" alt="cover">
        </div>
        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
        <small>{{$post->created_at}}</small>
      </div>

    @endforeach
  @else
    <p>No posts found.</p>
  @endif

  <a href="posts/create" class="btn btn-secondary">Create Post</a>
@endsection
