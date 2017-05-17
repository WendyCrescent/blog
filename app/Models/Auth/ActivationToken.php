<?php

namespace App\Models\Auth;

use Illuminate\Database\Eloquent\Model;

class ActivationToken extends Model
{
  protected $fillable = ['token'];

  public function getRouteKeyName()
  {
    return 'token';
  }

  public function user()
  {
    return $this->belongsTo(\App\Models\User::class);
  }
}
