@extends('templates.app')

@section('title', $author->name)

@section('content')
<div class="row author-profile">
  <div class="col-md-10 col-md-offset-1">
      <h2>About {{ $author->name }} </h2>
      <div class="author-profile__image col-md-5">
        <img class="img-responsive" src="{{ $author->profile->image }}" alt="">
      </div>
    <div class="author-profile__Bio col-md-7">
      {!! Markdown::convertToHtml(e($author->profile->description)) !!}
    </div>
  </div>
</div>
<div class="row author-posts">
  <div class="col-md-10 col-md-offset-1">
    <div class="col-md-12">
      <h3> Posts made by {{ $author->name }} </h3>
      @include('posts.partials.list', [
        'posts' => $posts
      ])
    </div>
  </div>
</div>
@endsection
