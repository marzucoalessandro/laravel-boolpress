<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{asset (css/app.css)}">
    <title>singolo post</title>
  </head>
  <body>
    <h1>mostra singolo post</h1>
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>title</th>
          <th>body</th>
          <th>category</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td> {{$post->id}}</td>
          <td> {{$post->title}}</td>
          <td> {{$post->body}}</td>
          <td> {{$post->category_id}}</td>
        </tr>
      </tbody>
    </table>
  </body>
  </html>
