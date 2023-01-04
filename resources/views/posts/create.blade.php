@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-4">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  <div class="card">
    <div class="card-header text-center font-weight-bold">
      Add Post
    </div>
    <div class="card-body">
      <form name="form" id="id" method="post" action="{{url('dashboard')}}">
       @csrf
        
        <div class="form-group">
          <label>Description</label>
          <textarea name="description" class="form-control" required=""></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <div align='right'>
        <a href="{{route('dashboard')}}">Cancel</a>
        </div>
      </form>
    </div>
  </div>
</div>  
</body>
</html>


@endsection