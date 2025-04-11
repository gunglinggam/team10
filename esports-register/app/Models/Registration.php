<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    
    use HasFactory;

    protected $fillable = ['user_id', 'game_competition_id', 'status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function gameCompetition()
    {
        return $this->belongsTo(GameCompetition::class);
    }
}
