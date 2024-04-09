<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Mustawa Mursalin',
            'email' => 'super_admin@os.test',
            'email_verified_at' => now(),
            'password' => bcrypt('bismillah'),
            'gender' => 1,
            'is_active' => 1,
        ]);
        $user->assignRole('Super Admin');

        $user = User::create([
            'name' => 'Administrator',
            'email' => 'admin@os.test',
            'email_verified_at' => now(),
            'password' => bcrypt('bismillah'),
            'gender' => 1,
            'is_active' => 1,
        ]);
        $user->assignRole('One Management');

        $user = User::create([
            'name' => 'Korwil Kota',
            'email' => 'korwil_01@os.test',
            'email_verified_at' => now(),
            'password' => bcrypt('bismillah'),
            'gender' => 1,
            'is_active' => 1,
        ]);
        $user->assignRole('One Wilayah');

        $user = User::create([
            'name' => 'Korwil Tengah',
            'email' => 'korwil_02@os.test',
            'email_verified_at' => now(),
            'password' => bcrypt('bismillah'),
            'gender' => 1,
            'is_active' => 1,
        ]);
        $user->assignRole('One Wilayah');
        $user = User::create([
            'name' => 'Korwil Selatan',
            'email' => 'korwil_03@os.test',
            'email_verified_at' => now(),
            'password' => bcrypt('bismillah'),
            'gender' => 1,
            'is_active' => 1,
        ]);
        $user->assignRole('One Wilayah');
        $user = User::create([
            'name' => 'Korwil Barat',
            'email' => 'korwil_04@os.test',
            'email_verified_at' => now(),
            'password' => bcrypt('bismillah'),
            'gender' => 1,
            'is_active' => 1,
        ]);
        $user->assignRole('One Wilayah');
        $user = User::create([
            'name' => 'Korwil Utara',
            'email' => 'korwil_05@os.test',
            'email_verified_at' => now(),
            'password' => bcrypt('bismillah'),
            'gender' => 1,
            'is_active' => 1,
        ]);
        $user->assignRole('One Wilayah');

        $user = User::create([
            'name' => 'Korcam Cina',
            'email' => 'korcam_08@os.test',
            'email_verified_at' => now(),
            'password' => bcrypt('bismillah'),
            'gender' => 1,
            'is_active' => 1,
        ]);
        $user->assignRole('One Kecamatan');

        $user = User::create([
            'name' => 'One Kelurahan Tanete',
            'email' => 'kordes_96@os.test',
            'email_verified_at' => now(),
            'password' => bcrypt('bismillah'),
            // 'village_id' => 96,
            'tps_id' => 255,
            'gender' => 1,
            'is_active' => 1,
        ]);
        $user->assignRole('One Desa/Kelurahan');
    }
}
