@extends('layouts.app')

@section('content')
    <h1><a href="{{route('posts.show', $post->id)}}">Last post is : {{$post->id}}</a></h1>
    <ul>
        @foreach($posts as $allPosts)
        <li><a href="{{route('posts.show', $allPosts->id)}}">{{$allPosts->title}}</a></li>

    @endforeach

</ul>
    @endsection



