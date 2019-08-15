@extends('layouts.app')

@section('title', 'Add Category')

@section('main-content')
    <div class="header-page">
        <div class="overlay-page"></div>
        <h1>ADD CATEGORY</h1>
    </div>
    <div class="content-page mt-5 col-10 mx-auto">
        {!! Form::open(['action' => 'CategoriesController@store', 'method' => 'POST','enctype' => "multipart/form-data"]) !!}
            <div class="form-group">
                {{Form::label('category', 'Category')}}
                {{Form::text('category', '', ['class' => 'form-control', 'placeholder' => 'Enter Category Here...'])}}
            </div>
            <div class="form-group">
                {{Form::file('category_image')}}
            </div>
            {{Form::submit('Submit', ['class' => 'btn-sm mt-2 btn-primary'])}}
        {!! Form::close() !!}
        </div>
    </div>
@endsection