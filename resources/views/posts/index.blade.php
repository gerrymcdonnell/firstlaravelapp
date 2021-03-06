@extends('layout.mainlayout2')
@section('content')

<table class="table">
  <thead>
    <tr>
      <th>id</th>
      <th>title</th>
      <th>content</th>
      <th>file</th>
      <th>created</th>
      <th>updated</th>
      <th></th>
      <th></th>

    </tr>
  </thead>
  <tbody>

    @foreach($posts as $post)

        <tr>
        <th scope='row'>{{$post->id}} </th>

            <td>
            <a href="{{route('posts.show',$post->id)}}">
            {{$post->title}}
            </a>
            </td>
            <td>{{$post->content}}</td>

            <!-- file upload path -->
            <td>
                <img height="50" src="{{$post->path}}">
            </td>


            <td>{{$post->created_at}}</td>
            <td>{{$post->updated_at}}</td>

            <td><a class="btn btn-primary" href="{{route('posts.edit',$post->id)}}">Edit </a></td>


            <td>
                <!--1 way to delete browser only recognises post and get -->
               {{-- <form method="post" action="/posts/{{$post->id}}">
                    <input type="hidden" name="_method" value="delete">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" class="btn btn-primary">Delete</button>
                </form>--}}

                <!--2nd way to delete -->
                {!! Form::open([
                'method'=>'delete',
                'action'=>['PostsController@destroy',$post->id]]) !!}

                {!! Form::submit('delete',['class'=>'btn btn-danger']) !!}

                {!! Form::close() !!}

            </td>

        </tr>

    @endforeach

  </tbody>
</table>




@endsection




