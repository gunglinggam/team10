<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'type',
        'date',
        'location',
        'quota',
        'image',
    ];

    public function registrations()
    {
        return $this->hasMany(Registration::class);
    }
}
