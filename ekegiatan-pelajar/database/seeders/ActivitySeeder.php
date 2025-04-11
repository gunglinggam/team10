<?php

namespace Database\Seeders;

use App\Models\Activity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Activity::create([
            'title' => 'Seminar Kepemimpinan',
            'description' => 'Pelatihan soft skill untuk siswa kelas 10 dan 11',
            'type' => 'Seminar',
            'date' => '2025-05-15',
            'location' => 'Aula Sekolah',
            'quota' => 50,
            'image' => 'seminar.jpg',
        ]);
    }
}
