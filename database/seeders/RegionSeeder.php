<?php

namespace Database\Seeders;

use App\Models\Region;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $regions = collect([
            'Wilayah Kota',
            'Wilayah Tengah',
            'Wilayah Selatan',
            'Wilayah Barat',
            'Wilayah Utara',
        ]);

        $regions->each(function ($data) {
            Region::create([
                'region_name' => $data
            ]);
        });

        Region::where('id', 1)->update(
            [
                'user_id' => 3
            ]
        );
        Region::where('id', 2)->update(
            [
                'user_id' => 4
            ]
        );
        Region::where('id', 3)->update(
            [
                'user_id' => 5
            ]
        );
        Region::where('id', 4)->update(
            [
                'user_id' => 6
            ]
        );
        Region::where('id', 5)->update(
            [
                'user_id' => 7
            ]
        );
    }
}
