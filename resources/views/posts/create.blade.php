<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Inserisci un nuovo post</h1>

    <form class="" action="{{route ('posts.store')}}" method="post">
      @csrf
      <label for="title">Titolo del post: </label>
      <input type="text" name="title" id="title">
      <br>
      <label for="body">Testo del post: </label>
      <textarea name="body" rows="8" cols="80"></textarea>
      <button type="submit" name="button">INVIA</button>
    </form>
  </body>
</html>
