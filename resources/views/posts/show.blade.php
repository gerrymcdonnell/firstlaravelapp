@extends('layout.mainlayout2')
@section('content')

<table class="table">
  <thead>
    <tr>
      <th>id</th>
      <th>title</th>
      <th>content</th>
      <th></th>
    </tr>
  </thead>
  <tbody>

        <tr>
        <th scope='row'>{{$post->id}} </th>
            <td>{{$post->title}}</td>
            <td>{{$post->content}}</td>
        </tr>

  </tbody>
</table>

@endsection