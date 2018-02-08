@extends('layout.mainlayout2')




@section('content')

Add Post

    <form method="post" action="/posts">

        <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
             <input type="text" class="form-control"  name="title" placeholder="enter title">
        </div>

        <div class="form-group">
            <label for="content">Content</label>
             <input type="text" class="form-control"  name="content" placeholder="enter content">
        </div>


       <input type="hidden" name="user_id" value="1">

       <input type="hidden" name="_token" value="{{ csrf_token() }}">

       <button type="submit" class="btn btn-primary">Submit</button>

    </form>

@endsection






