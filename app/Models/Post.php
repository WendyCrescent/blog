<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  public function getRouteKeyName()
  {
    return 'slug';
  }

  public function scopeLatestFirst($query)
  {
    return $query->orderBy('created_at', 'desc');
  }

  public function scopeIsLive($query)
  {
    return $query->where('live', true);
  }

  public function author()
  {
    return $this->belongsTo(User::class);
  }

  public function tags()
  {
    return $this->morphToMany(Tag::class, 'taggable');
  }
}
