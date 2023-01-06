@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <label>{{ $user->name }}</label>
    </div>
    <div class="row justify-content-center">
        <a href="{{ route('dashboard') }}">Back</a>
    </div>
    @foreach ($posts as $post)
        @include('posts.show', ['post' => $post])
    @endforeach

    {{-- @foreach ($posts as $post)
        @foreach ($comments as $comment)
        @if ($comment->user_id) --}}
@endsection
