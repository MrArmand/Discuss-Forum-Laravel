@extends('layouts.app')

@section('content')
    
</div>
<div class="container">
  <nav class="breadcrumb">
    <a href="#" class="breadcrumb-item active"> Dashboard</a>
    <a href="#" class="breadcrumb-item active"> News</a>
  </nav>

  <a href="{{ route('posts.create')}}">Create post</a>

  @foreach ($posts as $post)

  <div class="container px-4">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><a href="/user/{{$post->user_id}}">{{$post -> username($post->user_id)}}</a></div>
                <div class="card-body">
                    
                    {{ __($post->content) }}

                    {{-- <div class="container px-4">
                        <div class="row justify-content-center">
                            <div class="col-md-10">
                                <div class="card">
                                    <div class="card-header"><a href="/user/{{$comment->user_id}}">{{$comment -> username($comment->user_id)}}</a></div>
                                     <div class="card-body">
                            
                            {{ __($comment->content) }} --}}

                    <div class="top-right links">
                        <a href="{{route('home')}}">Comment</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  

@endforeach 
       
@endsection
