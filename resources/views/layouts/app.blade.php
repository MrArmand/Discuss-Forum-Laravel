<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>

  <!-- Header -->
<div class="container-fluid">
      <nav class="navbar navbar-dark bg-dark">
        <div class="container">
          <h1>
            <a href="#" class="navbar-brand">Forum</a>
          </h1>
          <form action="#" class="form-inline mr-3 mb-2 mb-sm-0">
            <input type="text" class="form-control" placeholder="search" />
            <button type="submit" class="btn btn-success">Search Forum</button>
          </form>
        </div>
      </nav>

      <!-- Dashboard panel -->
    </div>
    <div class="container">
      <nav class="breadcrumb">
        <a href="#" class="breadcrumb-item active"> Dashboard</a>
      </nav>

                        
            @if (Route::has('login') && Auth::check())
                <div class="top-right links">
                    <a href="{{ url('/logout') }}">Log Out
                    </a>
                </div>
            @elseif (Route::has('login') && !Auth::check())
                <div class="top-right links">
                    <a href="{{ url('/login') }}">Login</a>
                    <a href="{{ url('/register') }}">Register</a>
                </div>
            @endif

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- Footer -->
    <div class="container-fluid">
      <footer class="small bg-dark text-white">
        <div class="container py-4">
          <ul class="list-inline mb-0 text-center">
            <li class="list-inline-item">
              &copy; 2023 Disscussion forum
            </li>
            <li class="list-inline-item">All rights reserved</li>
            <li class="list-inline-item">Terms and privacy policy</li>
          </ul>
        </div>
      </footer>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
