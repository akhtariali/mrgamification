@php
    use App\Post;
    use App\Category;
@endphp
@extends('layouts.app')

@section('title', $post->title)
@section('meta', $post->meta)
@section('author', $post->author)
@section('main-content')
<div class="header-page header-post"
    style="">
    <div class="overlay-page"></div>
    <h2 class="text-center px-5 mt-3">{{$post->title}}</h2>
    <h4 class="px-5">{{$post->secondary_title}}</h4>
    <hr>
    <i>Posted by 
        @if ($post->author = 'Ali Akhtari')
            <a href="http://aliakhtari.me">{{$post->author}}</a>
        @else
            <a href="https://www.linkedin.com/in/kamran-hatami-608ab010b/">{{$post->author}}</a>
        @endif
         on {{date('Y M d', strtotime($post->created_at))}}</i>
</div>
<div class="content-page mt-5 col-11 col-md-8 mx-auto">
    <div class="content-post col-12">
        {!!$post->body!!}
    </div>
    <div class="post-categories">
        <i class="fas fa-chess"></i>
        @php
            $numCategories = count($post->categories);
            $i = 0;
        @endphp
        @foreach ($post->categories as $category)
            @php
                // Finds the category in Category Model and sets its ID to $selectedId, which will be used
                // in routing in the next anchor
                $selectedCategory = Category::where('category', $category)->first();
                $selectedURL = $selectedCategory->url;
            @endphp
            <a href="/categories/{{$selectedURL}}">{{$category}}</a>
            @php
            // Does not insert "," after last item
              if(++$i != $numCategories) {
                  echo ',';
              }
            @endphp
        @endforeach
    </div>
    <div class="post-buttons d-flex mt-5">
        @if (Post::find($post->id - 1))
            @php
                $previousPost = Post::find($post->id - 1);
            @endphp
            <a href="/blog/{{$previousPost->url}}" class="btn primary-btn orange mr-auto font-weight-normal">Previous Post</a>
        @endif
        @if (Post::find($post->id + 1))
            @php
                $nextPost = Post::find($post->id + 1);
            @endphp
            <a href="/blog/{{$nextPost->url}}" class="btn primary-btn orange ml-auto font-weight-normal">Next Post</a>
        @endif
    </div>
    @if (!Auth::guest())
    <hr>
    <div class="edit-buttons">
        <a href="/blog/{{$post->url}}/edit" class="btn btn-secondary">Edit</a>
        {!!Form::open(['action' => ['BlogController@destroy', $post->url], 'method' => 'POST', 'class' => 'd-inline'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}
    </div>
    @endif
</div>

<style>
    .header-page {
        background-image: url('/storage/images/{{$post->cover_image}}') !important;
    }
    .content-post strong {
        color: black !important;
    }
</style>
@endsection