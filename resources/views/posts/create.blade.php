@extends('layouts.app')

@section('header')
    Create Post
@endsection
@section('content')
  <h1>Posts</h1>
  {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
  <div class="form-group">
	 {{Form::label('title', 'Title')}}
   {{Form::text('title', '', ['placeholder'=>'Title', 'class' => 'form-control'])}}
  </div>
   <br>
   <div class="form-group">
     {{Form::label('title', 'Post Content')}}
     {{Form::textarea('body', '', ['class' => 'form-control', 'placeholder'=>'Post Content'])}}
   </div>
   <br>
   <div class="form-group">
     {{Form::file('cover_image')}}
   </div>
   {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
  {!! Form::close() !!}
@endsection
