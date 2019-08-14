@extends('layouts.app')
@section('title', 'Blog')

@section('main-content')
<div class="header-page">
    <div class="overlay-page"></div>
    <h1>BLOG</h1>
</div>
<div class="messages col-8 mx-auto mt-5">
    @include('inc.messages')
</div>
<div class="content-page mt-5 d-flex flex-column align-items-center">
    @foreach ($posts as $post)
        <div class="single-post col-8">
        <a href="/blog/{{$post->id}}" style="color: black;">
                <h2>{{$post->title}}</h2>
                <h5>{{$post->secondary_title}}</h5>
                </a>
            <i>Posted by <a href="" class="styled-anchor">{{$post->author}}</a>
                on {{date('Y M d', strtotime($post->created_at))}}
            </i>
            <hr>
        </div>
        {{$posts->links()}}
    @endforeach
</div>

<style>
    .header-page {
        background: url(https://images.unsplash.com/photo-1512736912-cd9db1d90b72?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1952&q=80) !important;
    }
    .single-post a {
        color: black !important;
    }
    .single-post a:hover {
        transition: .3s;
        color: orange !important;
    }
</style>
@endsection