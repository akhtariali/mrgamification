@extends('layouts.app')

@section('title', 'Add Category')

@section('main-content')
    <div class="header-page">
        <div class="overlay-page"></div>
        <h1>ADD CATEGORY</h1>
    </div>
    @include('inc.messages')
    <div class="content-page mt-5 col-10 mx-auto">
        {!! Form::open(['action' => 'CategoriesController@store', 'method' => 'POST','enctype' => "multipart/form-data"]) !!}
            <div class="form-group">
                {{Form::label('category', 'Category')}}
                {{Form::text('category', '', ['class' => 'form-control', 'placeholder' => 'Enter Category Here...'])}}
            </div>
            <div class="form-group">
                {{Form::label('url', 'URL')}}
                {{Form::text('url', '', ['class' => 'form-control', 'placeholder' => 'Enter URL Here...'])}}
            </div>
            <div class="form-group">
                {{Form::label('meta', 'Meta Description')}}
                {{Form::textarea('meta', '', ['class' => 'form-control', 'rows' => 3, 'placeholder' => 'Enter Meta Description Here...'])}}
            </div>
            <div class="form-group">
                {{Form::file('category_image')}}
            </div>
            {{Form::submit('Submit', ['class' => 'btn-sm mt-2 btn-primary'])}}
        {!! Form::close() !!}
        </div>
    </div>
    <style>
        .header-page {
            background: url(https://images.unsplash.com/photo-1565682460264-8603be5f050c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1932&q=80) center !important;
        }
    </style>
@endsection