@extends('layout.app')

@section('content')
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">This is a test-blog!</h1>
    <p class="lead">Check the section....</p>
    <a href="{{route ('blog')}}" class="btn btn-primary">Read the blog</a>
  </div>
</div>
@endsection
