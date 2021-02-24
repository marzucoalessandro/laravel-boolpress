<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
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
