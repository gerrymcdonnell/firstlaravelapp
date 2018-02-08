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
<?php
    foreach($posts as $post){

    echo "<tr>  <th scope='row'>$post->id</th>";
          echo "<td>$post->title</td>";
           echo "<td>$post->content</td>";
           echo '<td><button type="submit" class="btn btn-primary">edit</button></td>';
           echo '<td><button type="submit" class="btn btn-primary">delete</button></td>';
    echo "</tr>";
    }

?>
  </tbody>
</table>
@endsection


