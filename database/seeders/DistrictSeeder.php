<?php

namespace Database\Seeders;

use App\Models\District;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'region_id' => 1,
                'district_name' => 'Palakka',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'region_id' => 1,
                'district_name' => 'Tanete Riattang',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'region_id' => 1,
                'district_name' => 'Tanete Riattang Barat',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'region_id' => 1,
                'district_name' => 'Tanete Riattang Timur',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],



            [
                'region_id' => 2,
                'district_name' => 'Mare',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'region_id' => 2,
                'district_name' => 'Sibulue',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],

            [
                'region_id' => 2,
                'district_name' => 'Barebbo',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'region_id' => 2,
                'district_name' => 'Cina',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'region_id' => 2,
                'district_name' => 'Ponre',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'region_id' => 2,
                'district_name' => 'Tonra',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],







            [
                'region_id' => 3,
                'district_name' => 'Bontocani',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'region_id' => 3,
                'district_name' => 'Kahu',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'region_id' => 3,
                'district_name' => 'Kajuara',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'region_id' => 3,
                'district_name' => 'Salomekko',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'region_id' => 3,
                'district_name' => 'Libureng',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'region_id' => 3,
                'district_name' => 'Patimpeng',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],










            [
                'region_id' => 4,
                'district_name' => 'Lappariaja',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'region_id' => 4,
                'district_name' => 'Lamuru',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'region_id' => 4,
                'district_name' => 'Ulaweng',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'region_id' => 4,
                'district_name' => 'Amali',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'region_id' => 4,
                'district_name' => 'Tellulimpoe',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'region_id' => 4,
                'district_name' => 'Bengo',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],




            [
                'region_id' => 5,
                'district_name' => 'Awangpone',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],

            [
                'region_id' => 5,
                'district_name' => 'Tellu Siattinge',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'region_id' => 5,
                'district_name' => 'Ajangale',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'region_id' => 5,
                'district_name' => 'Dua Boccoe',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'region_id' => 5,
                'district_name' => 'Cenrana',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],

        ];
        foreach ($data as $row) {
            District::create($row);
        };
        District::where('id', 8)->update(
            [
                'user_id' => 8
            ]
        );
    }
}
