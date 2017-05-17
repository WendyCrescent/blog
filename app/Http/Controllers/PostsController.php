<?php

namespace App\Http\Controllers;

use App\Models\{Post, Tag};
use Illuminate\Http\Request;

class PostsController extends Controller
{
  public function index(Post $post)
  {
    return view('welcome')->with([
      'posts' => $post->isLive()->LatestFirst()->get(),
    ]);
  }

  public function tagged(Tag $tag)
  {
    return view('posts.tag')->with([
      'posts' => $tag->posts()->isLive()->LatestFirst()->get(),
      'tag' => $tag,
    ]);
  }
}
