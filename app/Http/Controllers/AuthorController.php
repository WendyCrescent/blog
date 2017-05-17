<?php

namespace App\Http\Controllers;

use App\Models\{User, Post};
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index(User $author)
    {
      if(!$author->isRole('author')) {
        abort(404, 'The user: "' . $author->name . '" is not an author.');
      }

      $posts = Post::where('author_id', $author->id)->isLive()->LatestFirst()->get();
      return view('author.index')->with([
        'author' => $author,
        'posts' => $posts,
      ]);
    }
}
