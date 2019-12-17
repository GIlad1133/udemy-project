<meta name="csrf-token" content="{{ csrf_token() }}">
@extends('layouts.app')

@section('content')
    <h1>{{$post->title}}</h1>
    <h1>{{$post->body}}</h1>
    <h1>{{$post->is_admin}}</h1>
@endsection

