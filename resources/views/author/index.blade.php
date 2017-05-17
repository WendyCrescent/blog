@extends('templates.app')

@section('title', $author->name)

@section('content')

<div class="author-profile">
  <h2>About {{ $author->name }} </h2>
  <div class="author-profile__image">
    <img class="img-responsive" height="350" width="250" src="{{ $author->profile->image }}" alt="">
  </div>
  <div class="author-profile__Bio">
    {!! Markdown::convertToHtml(e($author->profile->description)) !!}
  </div>
</div>

<div class="author-posts">
  <h3> Posts made by {{ $author->name }} </h3>
  @include('posts.partials.list', [
    'posts' => $posts
  ])
</div>

@endsection
