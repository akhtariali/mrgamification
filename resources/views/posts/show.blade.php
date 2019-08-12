
@extends('layouts.app')

@section('header')
    MyApp - {{$post->title}}
@endsection
@section('content')
  <img style='width: 500px;' src="/storage/cover_images/{{$post->cover_image}}" alt="cover">
  <h1>{{$post->title}}</h1>
  <h3>{{$post->created_at}}</h3>
  <p>{!!$post->body!!}</p>
  @php
    use App\User;
    $id = $post->user_id;
    $user = User::find($id);
  @endphp
  <p>Writer: {{$user->name}}</p>
  @if ($post->user_id == auth()->user()->id)
    <a href="/posts/{{$post->id}}/edit" class="btn btn-secondary">Edit</a>

    {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST']) !!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('DELETE', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
  @endif
@endsection
