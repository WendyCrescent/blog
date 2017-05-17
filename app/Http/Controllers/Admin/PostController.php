<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
  public function index()
  {
    return 'List All Posts Page';
  }

  public function compose()
  {
    return 'Compose Post Page';
  }

  public function composePost()
  {
  }

  public function edit()
  {
    return 'Edit Post Page';
  }

  public function editPost()
  {
  }

  public function delete()
  {
  }
}
