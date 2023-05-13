<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tournament_Players extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'tournament_players';
}
