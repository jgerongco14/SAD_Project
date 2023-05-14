<?php

namespace App\Models;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tournament_Players extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'tournament_players';
    

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    
}
