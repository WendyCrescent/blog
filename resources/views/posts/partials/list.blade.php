
@if($posts->count())
  @foreach($posts as $post)
  <div class="post">
    <h1 class="post__header">
      <a href="{{ route('post.show', $post->slug) }}">{{ $post->title }}</a>
    </h1>
    <div class="post__author">
      By <a href="{{ route('author', $post->author->id) }}"> {{ $post->author->name }} </a> <span class="post__time"> {{ $post->created_at->diffForHumans() }} </span>
    </div>
    <div class="image-preview">
      <img src="{{ $post->image }}" alt="" class="image-preview__image">
    </div>
    <div class="post__preview">
      {!! Markdown::convertToHtml(e($post->teaser)) !!}
    </div>
  </div>
  @endforeach
@else
  <p> No posts to see here. </p>
@endif
