@extends('layouts.app')

@section('content')

    <form method="post" action="/posts">

        <input type="text" name="title" placeholder="enter title">

         <input type="text" name="user_id" value="1" placeholder="enter user id">

        <input type="text" name="content">

        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <input type="submit" name="submit">

    </form>
