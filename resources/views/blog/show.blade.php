@extends('layouts.app')

@section('title', $post->title)

@section('main-content')
<div class="header-page header-post">
    <div class="overlay-page"></div>
    <h2 class="text-center px-5 mt-3">{{$post->title}}</h2>
    <h4 class="px-5">{{$post->secondary_title}}</h4>
    <hr>
    <i>Posted by <a href="">{{$post->author}}</a> on {{$post->created_at}}</i>
</div>
<div class="content-page mt-5 col-11 col-md-8 mx-auto">
    <div class="content-post">
        {{$post->body}}
    </div>
    <div class="post-categories">
        <i class="fas fa-chess"></i>
        <a href="">Gamification in Education</a>,
        <a href="">Gamification in Workplace</a>,
        <a href="">Gamified Apps</a>
    </div>
    <div class="post-buttons d-flex mt-5">
        <a href="/" class="btn-lg primary-btn orange mr-auto">Previous</a>
        <a href="/" class="btn-lg primary-btn orange ml-auto">Next</a>
    </div>
</div>

<style>
.header-page {
    background: url(https://images.unsplash.com/photo-1500236861371-c749e9a06b46?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80) !important;
}
</style>
@endsection