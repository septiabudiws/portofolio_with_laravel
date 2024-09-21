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
        $dataUsers = [
            [
                'name' => 'Moh. Septiabudi W.',
                'email' => 'septiabudiws@gmail.com',
                'password' => bcrypt('Mseptiabudi20'),
            ]

        ];

        foreach ($dataUsers as $user) {
            User::create($user);
    }
    }
}
