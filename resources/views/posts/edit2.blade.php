@extends('layout.mainlayout2')

@section('header')

    <section class="jumbotron text-center">
    <div class="container">
    <h1 class="jumbotron-heading">Edit Post v2 (using Laravel collective package) ID:{{$post->id}}</h1>

    </div>
    </section>

@endsection


@section('content')

{{--open form--}}
{!! Form::model($post,[
    'method'=>'put',
    'action'=>['PostsController@update',$post->id
]]) !!}

    {{ csrf_field() }}

    <div class="form-group">
        {!! Form::label('title','Title:') !!}
        {!! Form::text('title',null,['class'=>'form-control','placeholder'=>'enter title']) !!}
    </div>

    <div class="form-group">
            {!! Form::label('content','Content:') !!}
            {!! Form::text('content',null,['class'=>'form-control','placeholder'=>'enter content']) !!}
    </div>


   <input type="hidden" name="user_id" value="1">


   {!! Form::submit('Edit Post',['class'=>'btn btn-primary']) !!}

{!! Form::close() !!}

<hr>


@endsection






