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
      <h1>Modifica questo post</h1>
      @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
      <form class="" action="{{route ('posts.update', ['post' => $post->id] )}}" method="post">
        @csrf
        @method('PUT')
        <label for="title">Titolo del post: </label>
        <input type="text" name="title" id="title" value="{{$post->title}}">
        @error('title')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <label for="body">Testo del post: </label>
        <textarea name="body" rows="8" cols="80">{{$post->body}}</textarea>
        @error('body')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
          <label for="category">category</label>
          <select class="form-control" name="category" id="category">
              @foreach($categories as $category)
                <option value="{{$category->id}}">{{ $category->name }}</option>
              @endforeach

          </select>
        </div>
        @error('category')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
          <label for="tags">Tags</label>
          <select class="form-control" name="tags[]" id="tags" multiple>
            @if($tags)
              @foreach($tags as $tag)
                <option value="{{$tag->id}}" >{{ $tag->name }}</option>
              @endforeach
            @endif
          </select>
        </div>
        @error('tags')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <button type="submit" name="button">INVIA</button>
      </form>
    </body>
</html>
