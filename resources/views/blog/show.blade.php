@php
    use App\Post;
@endphp
@extends('layouts.app')

@section('title', $post->title)

@section('main-content')
<div class="header-page header-post">
    <div class="overlay-page"></div>
    <h2 class="text-center px-5 mt-3">{{$post->title}}</h2>
    <h4 class="px-5">{{$post->secondary_title}}</h4>
    <hr>
    <i>Posted by <a href="">{{$post->author}}</a> on {{date('Y M d', strtotime($post->created_at))}}</i>
</div>
<div class="content-page mt-5 col-11 col-md-8 mx-auto">
    <div class="content-post col-12">
        {!!$post->body!!}
    </div>
    <div class="post-categories m">
        <i class="fas fa-chess"></i>
        <a href="">Gamification in Education</a>,
        <a href="">Gamification in Workplace</a>,
        <a href="">Gamified Apps</a>
    </div>
    <div class="post-buttons d-flex mt-5">
        @if ($post->id > 1)
            <a href="/blog/{{$post->id - 1}}" class="btn primary-btn orange mr-auto font-weight-normal">Previous</a>
        @endif
        @if (Post::find($post->id + 1))
            <a href="/blog/{{$post->id + 1}}" class="btn primary-btn orange ml-auto font-weight-normal">Next</a>
        @endif
    </div>
    <hr>
    <div class="edit-buttons">
        <a href="/blog/{{$post->id}}/edit" class="btn btn-secondary">Edit</a>
        {!!Form::open(['action' => ['BlogController@destroy', $post->id], 'method' => 'POST', 'class' => 'd-inline'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}
    </div>
</div>

<style>
.header-page {
    background: url(https://images.unsplash.com/photo-1500236861371-c749e9a06b46?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80) !important;
}
.content-page {
    word-break: break-all;
}
.content-post strong {
    color: black !important;
}
</style>
@endsection