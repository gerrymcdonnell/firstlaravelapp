;@extends('layouts.app')

@section('layout.partials.header')


@section('content')

<h1>contact page</h1>

<h3>
    for loop example
</h3>

@if(count($people))   
    @foreach($people as $person)
        <li>{{$person}} </li>
    @endforeach
@endif




@endsection


@section('footer')
<script>alert('hello') </script>
@endsection