@extends('layouts.app')

@section('header')
    Edit Post
@endsection
@section('content')
  <h1>Posts</h1>
  {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
  <div class="form-group">
	 {{Form::label('title', 'Title')}}
   {{Form::text('title', $post->title, ['placeholder'=>'Title', 'class' => 'form-control'])}}
 </div>
 <div class="form-group">
   {{Form::label('title', 'Post Content')}}
   {{Form::textarea('body', $post->body, ['id'=>'article-ckeditor', 'placeholder'=>'Post Content', 'class' => 'form-control'])}}
 </div>
 <div class="form-group">
   {{Form::file('cover_image')}}
 </div>
   {{Form::hidden('_method', 'PUT')}}
   {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
  {!! Form::close() !!}
</div>
@endsection
