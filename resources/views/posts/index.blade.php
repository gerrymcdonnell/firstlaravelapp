@extends('layout.mainlayout2')
@section('content')

<table class="table">
  <thead>
    <tr>
      <th>id</th>
      <th>title</th>
      <th>content</th>
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
            <td>{{$post->created_at}}</td>
            <td>{{$post->updated_at}}</td>

            <td><a href="{{route('posts.edit',$post->id)}}">Edit </a></td>


            <td>
                <!--browser only recognises post and get -->
                <form method="post" action="/posts/{{$post->id}}">
                    <input type="hidden" name="_method" value="delete">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" class="btn btn-primary">Delete</button>
                </form>
            </td>

        </tr>

    @endforeach

  </tbody>
</table>




@endsection




