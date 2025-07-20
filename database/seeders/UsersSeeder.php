<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            ['documento' => '1004',
            'nombres' => 'Admin',
            'telefono' => '3146877896',
            'rol' => 'admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => '2023-03-08 18:29:25',
            'password' => Hash::make('admin'),
            'remember_token' => 'B8M31Chi1qvxufeS3FfWhjFXkhb67DCLQFNzFtewJNYb1g1XFRO7HQZajLTp',
            'estado' => 'activo',
            'created_at' => now(),
            'updated_at' => now(),],

            ['documento' => '1003',
            'nombres' => 'Cajero',
            'telefono' => '316584482',
            'rol' => 'cajero',
            'email' => 'cajero@gmail.com',
            'email_verified_at' => '2023-03-08 18:29:25',
            'password' => Hash::make('cajero'),
            'remember_token' => 'B8M31Chi1qvxufeS3FfWhjFXkhb67DCLQFNzFtewJNYb1g1XFRO7HQZajLTp',
            'estado' => 'activo',
            'created_at' => now(),
            'updated_at' => now(),],

            ['documento' => '1002',
            'nombres' => 'Mesera',
            'telefono' => '3158745963',
            'rol' => 'mesera',
            'email' => 'mesera@gmail.com',
            'email_verified_at' => '2023-03-08 18:29:25',
            'password' => Hash::make('mesera'),
            'remember_token' => 'B8M31Chi1qvxufeS3FfWhjFXkhb67DCLQFNzFtewJNYb1g1XFRO7HQZajLTp',
            'estado' => 'activo',
            'created_at' => now(),
            'updated_at' => now(),],

            ['documento' => '1003',
            'nombres' => 'Voce',
            'telefono' => '321654987',
            'rol' => 'mesera',
            'email' => 'voce@gmail.com',
            'email_verified_at' => '2023-03-10 18:29:25',
            'password' => Hash::make('123456789'),
            'remember_token' => 'B8M31Chi1qvxufeS3FfWhjFXkhb67DCLQFNzFtewJNYb1g1XFRO7HQZajLTp',
            'estado' => 'activo',
            'created_at' => now(),
            'updated_at' => now(),],
        ]);
    }
}
