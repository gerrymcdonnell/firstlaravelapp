@extends('layout.mainlayout2')

@section('header')

    <section class="jumbotron text-center">
    <div class="container">
    <h1 class="jumbotron-heading">Add Post v2</h1>

    </div>
    </section>

@endsection


@section('content')

Add Post v2 (using Laravel collective package)

{{--open form--}}
{!! Form::open([
'method'=>'post',
'action'=>'PostsController@store'
]) !!}

    <div class="form-group">
        {!! Form::label('title','Title:') !!}
        {!! Form::text('title',null,['class'=>'form-control','placeholder'=>'enter title']) !!}
    </div>

    <div class="form-group">
            {!! Form::label('content','Content:') !!}
            {!! Form::text('content',null,['class'=>'form-control','placeholder'=>'enter content']) !!}
    </div>


   <input type="hidden" name="user_id" value="1">

   <input type="hidden" name="_token" value="{{ csrf_token() }}">

   <button type="submit" class="btn btn-primary">Submit</button>


{!! Form::close() !!}

@endsection






