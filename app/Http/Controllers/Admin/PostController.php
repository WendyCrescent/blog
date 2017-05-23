<?php

namespace App\Http\Controllers\Admin;

use App\Models\{Post};
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
  public function index()
  {
    $posts = Post::LatestFirst()->get();
    return view('admin.list')->with([
      'posts' => $posts
    ]);
  }

  public function compose()
  {
    return view('admin.compose');
  }

  public function composePost(Request $request)
  {
    $this->validate($request, [
        'title' => 'required|max:255',
        'teaser' => 'required',
        'body' => 'required',
        'live' => 'required|in:0,1',
    ]);

    $post = new Post;

    $post->author_id = Auth::user()->id;
    $post->title = $request->title;
    $post->slug = str_slug($request->title);
    $post->teaser = $request->teaser;
    $post->body = $request->body;
    $post->image = $request->image;
    $post->live = $request->live;
    $post->save();

    return redirect()->route('post.index')->withSuccess('The post: "' . $request->title . '" was created.');
  }

  public function edit(Post $post)
  {
    return view('admin.edit')->with([
      'post' => $post
    ]);
  }

  public function editPost(Request $request, Post $post)
  {
    $post->title = $request->title;
    $post->slug = str_slug($request->title);
    $post->teaser = $request->teaser;
    $post->body = $request->body;
    $post->image = $request->image;
    $post->live = $request->live;
    $post->save();

    return redirect()->route('post.index')->withSuccess('The post: "' . $request->title . '" was updated.');
  }

  public function delete(Post $post)
  {
    $post->delete();
    return redirect()->route('post.index')->withSuccess('The post: "' . $post->title . '" was deleted.');
  }
}
