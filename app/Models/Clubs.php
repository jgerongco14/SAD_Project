<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clubs extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'clubs';

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_club');
    }
}
