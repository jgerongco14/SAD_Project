<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Foundation\Auth\User as AuthenticatableUser;
use Illuminate\Notifications\Notifiable;

class User extends AuthenticatableUser implements Authenticatable
{
    use HasFactory;
    public $timestamps = false;
    use Notifiable;

    protected $table = 'users';

    public function tournament()
    {
        return $this->belongsToMany(Tournament::class, 'tournament_players');
    }

}
