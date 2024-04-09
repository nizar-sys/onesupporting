<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Team::create([
            'team_name' => 'Koordinator Wilayah Kota',
            'user_id' => 3,
        ]);
        Team::create([
            'team_name' => 'Koordinator Kecamatan',
            'user_id' => 4,
        ]);
    }
}
