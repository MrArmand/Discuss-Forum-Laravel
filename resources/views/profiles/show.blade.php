@extends('layouts.app')


@section('content')
    <div class="row justify-content-center">
        <a href="{{ route('dashboard') }}">Back</a>
    </div>

    <div class="row justify-content-center">
        <label>{{ "$user->quote" }}</label>
    </div>

    <div class="row justify-content-center">
        <label>{{ "$user->name's posts" }}</label>
    </div>


    @foreach ($posts as $post)
        @if ($post->user_id == $user->id)
            @include('posts.show', ['post' => $post])
        @endif
    @endforeach

    <div class="row justify-content-center">
        <label>{{ "Posts commented by $user->name" }}</label>
    </div>

    @foreach ($posts as $post)
        @foreach ($post->comments as $comment)
            @if ($comment->user_id == $user->id)
                @include('posts.show', ['post' => $post])
            @endif
        @endforeach
    @endforeach
@endsection
