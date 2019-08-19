@extends('layouts.app')

@section('title', $category->category)

@section('main-content')
<div class="header-page header-post"
    style="">
    <div class="overlay-page"></div>
    <h2 class="text-center px-5 mt-3">{{$category->category}}</h2>
    @if (!Auth::guest())
        <hr>
        {!!Form::open(['action' => ['CategoriesController@destroy', $category->url], 'method' => 'POST', 'class' => 'btn-delete'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}
    @endif
</div>
<div class="content-page mt-5 d-flex flex-column align-items-center">
    @foreach ($posts as $post)
        <div class="single-post col-8">
        <a href="/blog/{{$post->url}}" style="color: black;">
                <h2>{{$post->title}}</h2>
                <h5>{{$post->secondary_title}}</h5>
                </a>
            <i>Posted by {{$post->author}}
                on {{date('Y M d', strtotime($post->created_at))}}
            </i>
            <hr>
        </div>
    @endforeach
</div>


<style>
    .header-post.header-page {
        background: url('/storage/images/{{$category->category_image}}') no-repeat center;
        background-size: cover;
    }
    .btn-delete {
        position: relative;
        z-index: 3;
    }
</style>
@endsection
