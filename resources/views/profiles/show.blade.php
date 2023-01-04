@extends('layouts.app')

@section('content')

    <ul>
        <label>{{$user->name}}</label>

        <div class="row justify-content-center">
            <a href="{{route('dashboard')}}">Back</a>
        </div>
        @foreach ($posts as $post)

  <div class="container px-10">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{$post -> username($post->user_id)}}</a></div>
                <div class="card-body">
                    
                    {{ __($post->content) }}
                    
                </div>
            </div>
        </div>
    </div>
</div>  

@endforeach 
@endsection