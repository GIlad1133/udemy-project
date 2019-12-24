<meta name="csrf-token" content="{{ csrf_token() }}">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
    <form method ="post" action="/posts" id="123" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
        <input type="text" name="title" placeholder="Enter Title" id="title" class="form-control" >
        </div>
        <div class="form-group">
            <input type="text" name="body" placeholder="Enter Body" class="form-control" required>
        </div>
        <div class="form-group">
            <input type="text" name="is_admin" placeholder="Enter Admin Token" class="form-control" required>
        </div>
        <input type="file" name="fileToUpload" id="file" placeholder="Select image to upload">
       <div  style="text-align:center">
        <input type="submit" name ="submit"  class="btn btn-primary" onClick="return empty()">
       </div>

    </form>
        </div>
    </div>

    <script>

        function empty()
        {
            var x;
            x = document.getElementById("title").value;
            if (!x)
            {
                alert("Enter a Valid title");
                return false;
            } else {

            };
        }

    </script>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <script src="{{ asset('js/app.js') }}"></script>


