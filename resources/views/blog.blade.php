@extends('layout.app')
@section('content')
@foreach($posts as $post)

<div class="card">
  <h2>Post_number: {{$post->id}}</h2>
  <h2>Title: {{$post->title}}</h2>
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


@endforeach
