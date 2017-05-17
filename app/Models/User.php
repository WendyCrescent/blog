<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'active',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function activationToken()
    {
      return $this->hasOne(Auth\ActivationToken::class);
    }

    public static function byEmail($email)
    {
      return static::where('email', $email);
    }
}
