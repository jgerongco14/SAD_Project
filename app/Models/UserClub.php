<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserClub extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'userclub';
    
    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
