@extends('templates.admin')

@section('title', 'Admin Index')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"> All Posts </h1>
        <ol class="breadcrumb">
            <li><i class="fa fa-dashboard"></i> <a href="{{ route('admin.home') }}">Dashboard</a></li>
            <li class="active"><i class="fa fa-file"></i> All Posts</li>
        </ol>
    </div>
</div>
<div class="row">
  <div class="col-lg-12">

    <h2>Bordered with Striped Rows</h2>
    <div class="table-responsive">
      <table class="table table-bordered table-hover table-striped">
        <thead>
          <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Edit / Delete</th>
            <th>Date</th>
          </tr>
        </thead>
        <tbody>

          @foreach($posts as $post)
            <tr>
              <td>{{ $post->title }}</td>
              <td>{{ $post->author->name }}</td>
              <td>
                <a href="{{ route('post.edit', $post->slug) }}">Edit</a> / <a href="{{ route('post.delete', $post->slug) }}">Delete</a>
              </td>
              <td>{{ $post->created_at->diffForHumans() }}</td>
            </tr>
          @endforeach

        </tbody>
      </table>
    </div>

  </div>
</div>
@endsection
