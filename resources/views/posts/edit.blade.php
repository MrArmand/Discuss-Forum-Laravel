@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
    <html>

    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>

    <body>
        <div class="row justify-content-center">
            <a href="{{ route('dashboard') }}">Back</a>
        </div>
        <div class="container mt-4">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <div class="card">
                <div class="card-header text-center font-weight-bold">
                    Edit Post
                </div>
                <div class="card-body">
                    <form action="/post/edited/{{ $post->id }}" method="post">
                        <textarea name="content" class="form-control" required=""></textarea>
                        @csrf
                        @method('PATCH')
                        <input type="hidden" name="post_id" value="{{ $post->id }}" />

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </body>

    </html>
@endsection
