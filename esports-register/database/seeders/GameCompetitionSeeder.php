<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\GameCompetition;

class GameCompetitionSeeder extends Seeder
{
    public function run(): void
    {
        GameCompetition::create([
            'title' => 'Mobile Legends Championship',
            'type' => 'Tim',
            'date' => '2025-05-25',
            'quota' => 32,
            'description' => 'Kompetisi ML antar kelas.',
            'image' => 'ml.jpg',
        ]);

        GameCompetition::create([
            'title' => 'Valorant 1v1 Showdown',
            'type' => 'Individu',
            'date' => '2025-06-02',
            'quota' => 64,
            'description' => 'Turnamen individu Valorant.',
            'image' => 'valorant.jpg',
        ]);
    }
}
