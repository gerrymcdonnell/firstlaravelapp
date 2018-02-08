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
            <td>{{$post->title}}</td>
            <td>{{$post->content}}</td>
            <td>{{$post->created_at}}</td>
            <td>{{$post->updated_at}}</td>
            <td><a href="/posts/{{$post->id}}/edit">Edit </a></td>
            <td><a href="/posts/{{$post->id}}/delete">delete </a></td>
        </tr>

    @endforeach

  </tbody>
</table>

@endsection




