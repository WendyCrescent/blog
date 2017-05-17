@extends('templates.app')

@section('title', 'Tag')

@section('content')
  <div class="content">
    <h3> Tagged in: {{ $tag->name }}</h3>
    
    @include('posts.partials.list', [
      'posts' => $posts
    ])
  </div>
  <div class="sidebar">
    @include('templates.partials.sidebar')
  </div>
@endsection
