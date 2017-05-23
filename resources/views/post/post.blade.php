@extends('templates.app')

@section('title', 'Post')

@section('header')
  @include('post.partials.image', [
    'url' =>  $post->image,
    'alt' => 'Coding',
  ])
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

<div class="row article__comments">
  <div class="col-md-8 col-md-offset-2">
    <div class="well">
      <h4>Leave a Comment:</h4>
      <form role="form">
        <div class="form-group">
          <textarea class="form-control" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>

    <hr>
    <div class="media article__comment">
      <a class="pull-left" href="#"> <img class="media-object" src="https://placehold.it/64x64" alt=""> </a>
      <div class="media-body">
        <h4 class="media-heading">User Name <small>August 25, 2014 at 9:30 PM</small> </h4>
        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
      </div>
    </div>
  </div>
</div>
@endsection
