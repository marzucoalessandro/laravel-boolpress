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
      <h1>Inserisci un nuovo post</h1>
      @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
      <form class="form-group" action="{{route ('posts.store')}}" method="post">
        @csrf

        <label for="title">Titolo del post: </label>
        <input class="form-control" type="text" name="title" id="title" value="{{ old('title')}}">
        @error('title')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>

        <label for="body">Testo del post: </label>
        <textarea class="form-control" name="body" rows="8" cols="80">{{ old('body')}}</textarea>
        @error('body')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <button class="btn btn-primary" type="submit" name="button">INVIA</button>
      </form>
    </body>
</html>
