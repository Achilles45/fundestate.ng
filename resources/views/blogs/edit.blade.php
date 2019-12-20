@extends('layouts.app')
@section('content')
    <div class="blogs__wrapper container-fluid mt-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="pt-5">EDIT AND UPDATE THIS POST</h2>
                </div>
            </div>
        </div>
    </div><br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h4>Edit Post Here</h4>
                <hr>
            </div>
        </div>
        <div class="row form__section">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="form__wrapper">
                    {!! Form::open(['action' => ['BlogsController@update', $blog->id], 'method' => 'POST']) !!}
                        <div class="form-group">
                            {{ Form::label('title', 'Title') }}
                            {{ Form::text('title', $blog->title, ['class' => 'form-control', 'placeholder' => 'Blog Title']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('description', 'Description') }}
                            {{ Form::text('description', $blog->description, ['class' => 'form-control', 'placeholder' => 'Blog Description']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('body', 'Body') }}
                                {{ Form::textarea('body', $blog->body, ['class' => 'form-control', 'placeholder' => 'Blog content goes here ...']) }}
                                </div>
                                {{ Form::hidden('_method', 'PUT') }}
                                {{ Form::submit('Create Blog', ['class' => 'blog__btn']) }}
                    {!! Form::close() !!}
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>