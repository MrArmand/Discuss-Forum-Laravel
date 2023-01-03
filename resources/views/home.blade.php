@extends('layouts.app')

@section('content')
    
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>

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
                <div class="card-header">{{ __("Armand") }}</div>

                <div class="card-body">
                    
                    {{ __("amogus") }}
                    
                </div>
            </div>
        </div>
    </div>
</div>  
@endforeach 
       
@endsection
