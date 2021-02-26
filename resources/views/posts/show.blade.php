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
      <h1>mostra singolo post</h1>

      <h2>{{$post->id}}</h2>
      <h3>Title: {{$post->title}}</h3>
      <p>Text: {{$post->body}}</p>
      <p>Category: {{ $post->category ? $post->category->name : "no category!" }}</p>


  </body>
  </html>
