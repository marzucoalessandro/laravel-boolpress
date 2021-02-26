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
      <h1>modifica questo post</h1>

      <form class="" action="{{route ('posts.update', ['post' => $post->id] )}}" method="post">
        @csrf
        @method('PUT')
        <label for="title">Titolo del post: </label>
        <input type="text" name="title" id="title" value="{{$post->title}}">
        <br>
        <label for="body">Testo del post: </label>
        <textarea name="body" rows="8" cols="80">{{$post->body}}</textarea>
        <button type="submit" name="button">INVIA</button>
      </form>
    </body>
</html>
