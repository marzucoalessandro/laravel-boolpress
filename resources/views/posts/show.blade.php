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
      <div class="single">

        <h2>Post number: {{$post->id}}</h2>
        <h3>Title: {{$post->title}}</h3>
        <h4>Text: {{$post->body}}</h4>
        <p>Category: {{ $post->category ? $post->category->name : "no category!" }}</p>

        @if(count($post->tags) > 0)
        @foreach($post->tags as $tag)
        <p>Tag: {{ $tag->name}}</p>
        @endforeach

        @else
        <p>Tag: Non ci son tag!</p>
        @endif
      </div>

  </body>
  </html>
