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

  <div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header"><a href="/user/{{$post->user_id}}">{{$post -> username($post->user_id)}}</a></div>
                <div class="card-body">
                    
                    {{ __($post->content) }}

                    <nav class="breadcrumb">
                    <div class="container">
                    
                        <div class="card">
                            <div class="card-body">
                    
                                {{ __($post->content) }}
                        </div>


                        <nav class="breadcrumb">
                            <div class="container">
                        <div class="form-group">
                            <label>Comment</label>
                            <textarea name="description" class="form-control" required=""></textarea>
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
