@extends('layouts.app')
@section('title', 'Edit Post')
@section('main-content')
<div class="header-page header-post mb-5">
    <div class="overlay-page"></div>
    <h2 class="text-center px-5 mt-3">Edit Post</h2>
    <h4 class="text-center px-5 font-weight-light">Seek for Perfection...</h4>
</div>
<div class="messages col-8 mx-auto">
    @include('inc.messages')
</div>
<div class="content-page mt-5 col-10 mx-auto">
    {!! Form::open(['action' => ['BlogController@update', $post->id], 'method' => 'POST', 'enctype' => "multipart/form-data"]) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Enter Title Here...'])}}
        </div>
        <div class="form-group">
            {{Form::label('secondary_title', 'Secondary Title')}}
            {{Form::text('secondary_title', $post->secondary_title, ['class' => 'form-control', 'placeholder' => 'Enter Secondary Title Here...'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Enter Post Body Here...'])}}
        </div>
        <div class="form-group">
            {{Form::label('categories', 'Categories')}}
            {{Form::text('categories', $post->categories, ['class' => 'form-control', 'placeholder' => 'Enter Categories Here...'])}}
        </div>
        <div class="form-group">
            {{Form::label('author', 'Author')}}
            {{Form::select("author" ,['Ali Akhtari' => 'Ali', 'Kamran Hatami' => 'Kamran'], $post->author,
                [
                "class" => "form-control-lg",
                "placeholder" => "Pick the Author..."
                ])
            }}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn primary-btn red'])}}

    {!! Form::close() !!}
</div>

<style>
    .header-post.header-page {
        background: url('/storage/images/{{$post->cover_image}}');
    }
    .btn.red:hover {
        background-color: red !important;
    }
</style>


<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'article-ckeditor' );
</script>
@endsection