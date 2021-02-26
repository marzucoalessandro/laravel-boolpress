<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/app.css">
    <title>Posts</title>
  </head>
  <body>
    <h1>Tabella dei Post</h1>
    <a class="btn btn-info" href="{{route ('posts.create')}}">Crea nuovo post</a>
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>title</th>
          <th>body</th>
        </tr>
      </thead>
      <tbody>@foreach($posts as $item)
        <tr>
          <td> {{$item->id}}</td>
          <td> {{$item->title}}</td>
          <td> {{$item->body}}</td>
          <td>
            <a href="{{route('posts.show', ['post'=> $item->id] )}}" class="btn btn-primary">View</a>
            <a href="{{route('posts.edit', ['post'=> $item->id] )}}" class="btn btn-success">Edit</a>


            <form class="" action="{{route('posts.destroy', ['post'=> $item->id] )}}" method="post">
              @csrf
              @method('DELETE')
              <button type="submit" name="button" class="btn btn-danger">Delete</button>
            </form>

          </td>

        </tr>
      </tbody>@endforeach
    </table>


  </body>
  </html>
