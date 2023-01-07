@extends('layouts.app')

@section('content')
    <div class="pagination">
        <a href="#">&laquo;</a>
        <a href="#"class="active">1</a>
        <a href="#">2</a>
        <a href="#">&raquo;</a>
    </div>

    @foreach ($posts as $post)
    @if (auth()->user()->id == $post->pin)
        @include('posts.show', ['post' => $post])
    @endforeach

    @foreach ($posts as $post)
        @include('posts.show', ['post' => $post])
    @endforeach
@endsection
