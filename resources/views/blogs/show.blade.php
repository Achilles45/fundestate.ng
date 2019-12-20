@extends('layouts.app')
@section('content')
<br>
<div class="container show__wrapper">
    <img src="{{ asset('images/house.jpeg') }}" class="img-fluid house" alt=""><br><br>
    <h4>{{ $blog->title }}</h4>
    <small>Created at: {{ $blog->created_at }}</small>
    <br>
    <p>{{ $blog->body }}</p>
    <a href="/blogs" class="back__btn float-left mr-3">Go Back</a>
    <a href="/blogs/{{ $blog->id }}/edit" class="edit__btn float-left">Edit Post</a>
    {{  Form::open(['action' => ['BlogsController@destroy', $blog->id], 'method' => 'POST', 'class' => 'float-right']) }}
    {{ Form::hidden('_method', 'DELETE') }}
    {{ Form::submit('Delete', ['class' => 'delete__btn']) }}
    {!! Form::close() !!}
</div>