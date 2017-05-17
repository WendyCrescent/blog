@extends('templates.app')

@section('title', 'Home')

@section('content')
  <div class="content">
    @include('posts.partials.list', [
      'posts' => $posts
    ])
  </div>
  <div class="sidebar">
    @include('templates.partials.sidebar')
  </div>
@endsection
