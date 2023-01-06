@extends('layouts.app')

@section('content')
    <div class="pagination">
        <a href="#">&laquo;</a>
        <a href="#"class="active">1</a>
        <a href="#">2</a>
        <a href="#">&raquo;</a>
    </div>
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

                            @include('comments.show', ['post' => $post])

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

                            @include('comments.create', ['post' => $post])

                        </div>
                </div>
            </div>
        </div>
        </div>

        </div>
    @endforeach
@endsection
