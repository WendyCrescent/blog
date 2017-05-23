@extends('templates.app')

@section('title', 'Home')

@section('content')
<div class="row">
  <div class="col-md-7">
    @include('posts.partials.list', [
      'posts' => $posts
    ])
  </div>
  <div class="col-md-4 col-md-offset-1">
    @include('templates.partials.sidebar')
  </div>
</div>
@endsection
