<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameCompetition extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'type', 'date', 'quota', 'description', 'image'];

    public function registrations()
    {
        return $this->hasMany(Registration::class);
    }
}
