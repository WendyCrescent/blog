@extends('templates.app')

@section('title', 'Post')

@section('header')
  @if($post->image)
    @include('post.partials.image', [
      'url' =>  $post->image,
      'alt' => 'Coding',
    ])
  @endif
@endsection

@section('content')
<div class="row">
  <article class="article col-md-8 col-md-offset-2">
    <div class="author">
      <img src="{{ $post->author->avatar() }}" alt="{{ $post->author->name }}" class="author__image">
      <div class="author__details">
        <a href="{{ route('author', $post->author->id) }}" class="auther__name"> {{ $post->author->name }} </a>
        <div class="author__post-time"> {{ $post->created_at->diffForHumans() }} </div>
      </div>
    </div>

    <h1 class="article__header"> {{ $post->title }} </h1>
    <h2 class="article__subheader">
      {!! Markdown::convertToHtml(e($post->teaser)) !!}
    </h2>

    <div class="article__body">
      {!! Markdown::convertToHtml(e($post->body)) !!}
    </div>

    @foreach($post->tags as $tag)
      <a href="{{ route('posts.tagged', $tag->slug) }}" class="tag"> {{ $tag->name }} </a>
    @endforeach
  </article>
</div>

@endsection
