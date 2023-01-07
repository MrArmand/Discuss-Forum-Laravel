@extends('layouts.app')

@section('content')
    <div class="pagination">
        <a href="#">&laquo;</a>
        <a href="#"class="active">1</a>
        <a href="#">2</a>
        <a href="#">&raquo;</a>
    </div>

    @if (auth()->user()->role == 1)
        <div class="content links">
            <p><b>{{("YOU ARE LOGGED AS AN ADMIN.")}}</b></p>
        </div>
    @endif

    @foreach ($posts as $post)
        @include('pins.show', ['post' => $post])
    @endforeach

    @foreach ($posts as $post)
        @include('posts.show', ['post' => $post])
    @endforeach
@endsection
