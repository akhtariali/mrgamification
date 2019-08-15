@extends('layouts.app')
@section('title', 'Create Post')
@section('main-content')
<div class="header-page header-post mb-5">
    <div class="overlay-page"></div>
    <h2 class="text-center px-5 mt-3">Create Post</h2>
    <h4 class="text-center px-5 font-weight-light">Write Something Awesome Today...</h4>
</div>
<div class="messages col-8 mx-auto">
    @include('inc.messages')
</div>
<div class="content-page mt-5 col-10 mx-auto">
    {!! Form::open(['action' => 'BlogController@store', 'method' => 'POST','enctype' => "multipart/form-data"]) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Enter Title Here...'])}}
        </div>
        <div class="form-group">
            {{Form::label('secondary_title', 'Secondary Title')}}
            {{Form::text('secondary_title', '', ['class' => 'form-control', 'placeholder' => 'Enter Secondary Title Here...'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Enter Post Body Here...'])}}
        </div>
        <div class="form-group">
            {{Form::label('categories', 'Categories')}}
            <br>
            @php
                // Fetched categories from Category model
                use App\Category;
                $categories = Category::all();
            @endphp
            @foreach ($categories as $category)
                {!! Form::checkbox('categories[]', $category->category) !!}
                {{Form::label($category->category, $category->category)}}
            @endforeach
        </div>
        <div class="form-group">
            {{Form::label('author', 'Author')}}
            {{Form::select("author" ,['Ali Akhtari' => 'Ali', 'Kamran Hatami' => 'Kamran'], null,
                [
                "class" => "form-control-lg",
                "placeholder" => "Pick the Author..."
                ])
            }}
        </div>
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn primary-btn red'])}}

    {!! Form::close() !!}
</div>

<style>
    .header-page {
        background: url(https://images.unsplash.com/photo-1434030216411-0b793f4b4173?ixlib=rb-1.2.1&auto=format&fit=crop&w=1650&q=80) !important;
        background-position: center !important;
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