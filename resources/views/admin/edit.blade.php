@extends('templates.admin')

@section('title', 'Edit Post')

@section('scriptExtra')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
<script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>

<script>
var teaserSimplemde = new SimpleMDE({ element: $("#teaser")[0] });
</script>

<script>
var bodySimplemde = new SimpleMDE({ element: $("#body")[0] });
</script>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"> Edit Post </h1>
        <ol class="breadcrumb">
            <li><i class="fa fa-dashboard"></i> <a href="{{ route('admin.home') }}">Dashboard</a></li>
            <li><i class="fa fa-file"></i> <a href="{{ route('post.index') }}">All Posts</a></li>
            <li class="active"><i class="fa fa-file"></i> Edit Post</li>
        </ol>
    </div>
</div>
<div class="row">
  <div class="col-lg-6 col-lg-offset-3">

    <form action="{{ route('post.edit', $post->slug) }}" method="post" role="form">
      {{ csrf_field() }}

      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="{{ $post->title }}">
      </div>

      <div class="form-group">
        <label for="teaser">Teaser</label>
        <textarea id="teaser" name="teaser" class="form-control" rows="4">{{ $post->teaser }}</textarea>
      </div>

      <div class="form-group">
        <label for="body">Body</label>
        <textarea id="body" name="body" class="form-control" rows="10">{{ $post->body }}</textarea>
      </div>

      <div class="form-group">
        <label for="title">Image</label>
        <input type="text" name="image" class="form-control" id="title" placeholder="Title" value="{{ $post->image }}">
      </div>

      <div class="form-group">
        <label for="title">Status</label>
          <select name="live" class="form-control">
            <option> --- Select Post Status --- </option>
            <option {{ $post->live == 0 ? "selected" : "" }} value="0">Draft Post</option>
            <option {{ $post->live == 1 ? "selected" : "" }} value="1">Live Post</option>
          </select>
      </div>

      <button class="btn btn-primary" type="submit"> Save Changes </button>
    </form>

  </div>
</div>
@endsection
