<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <!-- Styles -->
    @livewireStyles
    <style>
        html,
        body {
            background-color: #fff;
            color: #1e2122;
            font-family: 'Nunito';
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .btn-inline a {
            display: inline-block;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .top-right-pin {
            position: absolute;
            right: 5px;
            top: 12px;
        }

        .top-right-comment {
            position: absolute;
            right: 5px;
            top: 5px;
        }

        .right {
            text-align: right;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .profile>a {
            color: #ffffff;
            padding: 0 25px;
            font-size: 15px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .pin>a {
            color: #ffe600;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
            /* outline-style: outset; */
            outline-color: rgb(255, 255, 255);
        }

        .comments {
            color: #89c3e0;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        .pagination {
            text-align: center;
        }

        .pagination a {
            color: black;
            float: left;
            padding: 8px 16px;
            text-decoration: none;
        }

        .pagination a.active {
            background-color: #4CAF50;
            color: white;
            border-radius: 5px;
        }

        .pagination a:hover:not(.active) {
            background-color: #ddd;
            border-radius: 5px;
        }
    </style>
    @if (Route::has('login') && Auth::check())
        <div class="container">
            <nav class="breadcrumb flex-center ">
                <a href="{{ route('dashboard') }}" class="breadcrumb-item active"> <i class="fas fa-home"></i>Dashboard</a>
                <a href="{{ route('posts.create') }}" class="breadcrumb-item active"> <i class="fas fa-hammer"></i> Create post</a>
                <a href="/user/{{auth()->user()->id }}" class="breadcrumb-item active"> <i class="fas fa-id-card"></i>My Profile</a>
            </nav>
    @endif
</head>

<body>

    @livewireScripts

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


    @if ($errors->any())
        <div class="content links">
            Errors:
            <ul>
                @foreach ($errors->all() as $error)
                    {{ $error }}
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('message'))
        <div class="content">
            <p><b>{{ 'SUCCESS: ' }}{{ session('message') }}</b></p>
        </div>
    @endif
    <main class="py-4">
        @yield('content')
    </main>
    </div>
</body>

</html>
