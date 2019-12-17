<meta name="csrf-token" content="{{ csrf_token() }}">
@extends('layouts.app')

@section('content')

    <form method ="post" action="/posts" id="123">
        {{csrf_field()}}
    <div>
        <input type="text" name="title" placeholder="Enter title" id="title">
    </div>
        <div>

        <input type="text" name="body" placeholder="Enter body" required>
        </div>
        <div>
            <input type="text" name="is_admin" placeholder="Enter command" required>

        </div>
        <input type="submit" name = "submit" onClick="return empty()">

    </form>

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



