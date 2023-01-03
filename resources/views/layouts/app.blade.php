<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <div class="container-fluid">
      <!-- First section -->
      <nav class="navbar navbar-dark bg-dark">
        <div class="container">
          <h1>
            <a href="#" class="navbar-brand">Discussion forum</a>
          </h1>
          <form action="#" class="form-inline mr-3 mb-2 mb-sm-0">
            <input type="text" class="form-control" placeholder="search" />
            <button type="submit" class="btn btn-success">Search Forum</button>
          </form>
        </div>
      </nav>

     <!-- first section end -->
     </div>
    <div class="container">
      <nav class="breadcrumb">
        <a href="#" class="breadcrumb-item active"> Dashboard</a>
      </nav>


        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
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

