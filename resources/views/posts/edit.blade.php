@extends('layout.mainlayout2')

@section('header')

    <section class="jumbotron text-center">
    <div class="container">
    <h1 class="jumbotron-heading">Edit Post ID:{{$post->id}}</h1>

    </div>
    </section>

@endsection


@section('content')


    <form method="post" action="/posts/{{$post->id}}">

        <input type="hidden" name="_method" value="PUT">

        <div class="form-group">
            <label for="title">Title</label>
             <input type="text" class="form-control"  name="title" placeholder="enter title" value="{{$post->title}}">
        </div>

        <div class="form-group">
            <label for="content">Content</label>
             <input type="text" class="form-control"  name="content" placeholder="enter content" value="{{$post->content}}">
        </div>


       <input type="hidden" name="user_id" value="1">

       <input type="hidden" name="_token" value="{{ csrf_token() }}">

       <button type="submit" class="btn btn-primary">Update</button>

    </form>
<hr>
    Delete
    <!--browser only recognises post and get -->
{{--    <form method="post" action="/posts/{{$post->id}}">
        <input type="hidden" name="_method" value="delete">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button type="submit" class="btn btn-primary">Delete</button>
    </form>--}}

@endsection






