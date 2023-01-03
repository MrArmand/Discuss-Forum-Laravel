@extends('layouts.app')

@section('content')
    
</div>
<div class="container">
  <nav class="breadcrumb">
    <a href="#" class="breadcrumb-item active"> Dashboard</a>
    <a href="#" class="breadcrumb-item active"> News</a>
  </nav>

  @foreach ($posts as $post)
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><a href="/user/{{$post->user_id }}">{{$post->user_id}}</a></div>
                <div class="card-body">
                    
                    {{ __($post->content) }}
                    
                </div>
            </div>
        </div>
    </div>
</div>  
@endforeach 
       
@endsection
