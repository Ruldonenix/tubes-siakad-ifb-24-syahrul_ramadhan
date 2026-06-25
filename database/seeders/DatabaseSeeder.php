<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            [
                'email' => 'admin@siakad.test',
            ],
            [
                'name' => 'Abdul Aziz',
                'password' => Hash::make('Admin12345!'),
                'role' => 'admin',
                'npm' => null,
            ]
        );

        User::updateOrCreate(
            [
                'email' => 'mahasiswa@siakad.test',
            ],
            [
                'name' => 'Surya Pratama',
                'password' => Hash::make('Mahasiswa12345!'),
                'role' => 'mahasiswa',
                'npm' => '5520124011',
            ]
        );
    }
}