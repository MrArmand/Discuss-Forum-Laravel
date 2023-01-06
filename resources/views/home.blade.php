@extends('layouts.app')

@section('content')

        @foreach ($posts as $post)
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col">
                        <div class="card">
                            <div class="card-header"><a
                                    href="/user/{{ $post->user_id }}">{{ $post->username($post->user_id) }}</a>
                            </div>
                            <div class="card-body">

                                {{ __($post->content) }}

                                @if ($post->comments != null)
                                    @foreach ($post->comments as $comment)
                                        <nav class="">
                                            <div class="container">
                                                @include('comments.index', ['comment' => $comment])
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="card-header"><a
                                                                href="/user/{{ $comment->user_id }}">{{ $post->username($comment->user_id) }}</a>
                                                        </div>
                                                        {{ $comment->content }}
                                                    </div>
                                                </div>

                                            </div>
                                    @endforeach
                                @endif

                            </div>
                            @include('posts.index', ['post' => $post])
                        </div>




                        <meta name="csrf-token" content="{{ csrf_token() }}">
                        <nav class="breadcrumb">
                            <div class="container">
                                @if (session('status'))
                                    <div class="alert alert-success">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                <form method="POST" action="{{ route('comments.store') }}">

                                    @csrf
                                    <div class="form-group">
                                        <label>Comment</label>
                                        <input type="text" name="content" class="form-control" required="" />
                                        <input type="hidden" name="post_id" value="{{ $post->id }}" />
                                    </div>
                                    <div class="right">
                                        <button type="submit" class="btn">Submit</button>
                                    </div>
                                </form>
                            </div>
                    </div>
                </div>
            </div>
    </div>

    </div>
    @endforeach
@endsection
