@extends('layouts.app')


@section('content')
    <div class="row justify-content-center">
        <a href="{{ route('dashboard') }}">Back</a>
    </div>

    @if ($user->quote)
        <div class="row justify-content-center">
            <label>
                <blockquote>{{ "$user->name's quote:" }}<i>{{ " $user->quote" }}</i></blockquote>
            </label>
        </div>
    @endif

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
                @break
            @endif
        @endforeach
    @endforeach
@endsection
