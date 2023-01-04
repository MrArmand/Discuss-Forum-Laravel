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


                    <nav class="breadcrumb">
                    <div class="container">
                    <div class="breadcrumb-item active">
                    
                        <div class="form-group">
                            <label>Comment</label>
                            <textarea name="description" class="form-control" required=""></textarea>
                          </div>
                          <button type="submit" class="btn">Submit</button>
                          </div>
                        </form>
                        <div class="top-right">
                        <a href="{{route('home')}}"><livewire:counter /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  

@endforeach 
       
@endsection
