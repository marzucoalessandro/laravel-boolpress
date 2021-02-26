<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{asset (css/app.css)}">
    <title>singolo post</title>
  </head>
  <body>
    <h1>mostra singolo post</h1>

          <h2>{{$post->id}}</h2>
          <h3>Title: {{$post->title}}</h3>
          <p>Text: {{$post->body}}</p>
          <p>Category: {{ $post->category ? $post->category->name : "no category!" }}</p>

  </body>
  </html>
