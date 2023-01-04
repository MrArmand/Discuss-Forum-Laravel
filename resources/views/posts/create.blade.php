@extends('layouts.app')

@section('content')
    <form method="POST" action="{{route('posts.store')}}">
        @csrf
        <p>Whats on your mind?: <input type="text" content="content" value="{{ old('content')}}"></p>
        <p>Whats on your id?: <input type="text" id="id" value="{{ old('id')}}"></p>
        <input type="submit" value="Submit">
        <a href="{{route('dashboard')}}">Cancel</a>
    </form>

@endsection