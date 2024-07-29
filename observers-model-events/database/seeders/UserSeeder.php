<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = collect([
            [
                'name' => 'Disha',
                'email' => 'disha@gmail.com',
            ],
            [
                'name' => 'Isha',
                'email' => 'isha@gmail.com',
            ],
            [
                'name' => 'Manshi',
                'email' => 'manshi@gmail.com',
            ],
            [
                'name' => 'Harsh',
                'email' => 'harsh@gmail.com',
            ],
            [
                'name' => 'Miraj',
                'email' => 'miraj@gmail.com',
            ],
            [
                'name' => 'Hemaxi',
                'email' => 'hemaxi@gmail.com',
            ],
            [
                'name' => 'Viraj',
                'email' => 'viraj@gmail.com',
            ]
        ]);

        $users->each(function($user){
            User::insert($user);
        });
    }
}
