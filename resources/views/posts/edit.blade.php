<meta name="csrf-token" content="{{ csrf_token() }}">
@extends('layouts.app')

@section('content')
    <h1> Edit Post</h1>
    <form method ="post" action="/posts/{{$post->id}}" id="123">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="PUT">

        <div>
            <input type="text" name="title" placeholder="Enter title" id="title" value="{{$post->title}}">
        </div>
        <div>

            <input type="text" name="body" placeholder="Enter body" value="{{$post->body}}" required>
        </div>
        <div>
            <input type="text" name="is_admin" placeholder="Enter command" value="{{$post->is_admin}}" required>

        </div>
        <input type="submit" name = "submit" onClick="return empty()">

    </form>
    @endsection






