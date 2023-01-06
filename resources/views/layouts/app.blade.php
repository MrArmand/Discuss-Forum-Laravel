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

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
    @if (Route::has('login') && Auth::check())
        <div class="container">
            <nav class="breadcrumb">
                <a href=""{{ route('dashboard') }} class="breadcrumb-item active"> Dashboard</a>
                <a href="{{ route('posts.create') }}" class="breadcrumb-item active"> Create post</a>
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
        <div class="content links">
            <p><b>{{ 'SUCCESS: ' }}{{ session('message') }}</b></p>
        </div>
    @endif
    <main class="py-4">
        @yield('content')
    </main>
    </div>

</body>

</html>
