<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset ('css/app.css')}}">

        <title>Laravel-boolpress</title>


        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">



    </head>
    <body>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ route ('home')}}">home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="{{ route ('about')}}">About <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route ('blog')}}">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route ('posts.index')}}">Admin</a>
            </li>

          </ul>
        </div>
      </nav>



    </body>
    @yield('content')
</html>
