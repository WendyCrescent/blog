@extends('templates.admin')

@section('title', 'New Post')

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
        <h1 class="page-header"> Compose New Post </h1>
        <ol class="breadcrumb">
            <li><i class="fa fa-dashboard"></i> <a href="{{ route('admin.home') }}">Dashboard</a></li>
            <li class="active"><i class="fa fa-file"></i> New Post</li>
        </ol>
    </div>
</div>
<div class="row">
  <div class="col-lg-6 col-lg-offset-3">

    <form action="{{ route('post.compose') }}" method="post" role="form">
      {{ csrf_field() }}

      <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
        <label for="title">Title</label>
        <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="{{ old('title') }}">

        @if ($errors->has('title'))
            <span class="help-block">
                <strong>{{ $errors->first('title') }}</strong>
            </span>
        @endif
      </div>

      <div class="form-group{{ $errors->has('teaser') ? ' has-error' : '' }}">
        <label for="teaser">Teaser</label>
        <textarea id="teaser" name="teaser" class="form-control" rows="4">{{ old('teaser') }}</textarea>

        @if ($errors->has('teaser'))
            <span class="help-block">
                <strong>{{ $errors->first('teaser') }}</strong>
            </span>
        @endif
      </div>

      <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
        <label for="body">Body</label>
        <textarea id="body" name="body" class="form-control" rows="10">{{ old('body') }}</textarea>

        @if ($errors->has('body'))
            <span class="help-block">
                <strong>{{ $errors->first('body') }}</strong>
            </span>
        @endif
      </div>

      <div class="form-group">
        <label for="title">Image</label>
        <input type="text" name="image" class="form-control" id="title" placeholder="Title">
      </div>

      <div class="form-group{{ $errors->has('live') ? ' has-error' : '' }}">
        <label for="title">Status</label>
          <select name="live" class="form-control">
            <option> --- Select Post Status --- </option>
            <option value="0">Draft Post</option>
            <option value="1">Live Post</option>
          </select>

          @if ($errors->has('live'))
              <span class="help-block">
                  <strong>{{ $errors->first('live') }}</strong>
              </span>
          @endif
      </div>

      <button class="btn btn-primary" type="submit"> Save Changes </button>
    </form>

  </div>
</div>
@endsection
