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

    </tr>
  </thead>
  <tbody>

        <tr>
        <th scope='row'>{{$post->id}} </th>
            <td>{{$post->title}}</td>
            <td>{{$post->content}}</td>
            <td>{{$post->path}}</td>
            <td>{{$post->created_at}}</td>
            <td>{{$post->updated_at}}</td>
        </tr>

  </tbody>
</table>

@endsection