<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('students')->insert([
            [
                'name' => 'John Doe',
                'email' => 'john.doe@example.com',
                'phone_number' => 1234567890,
                'password' => Hash::make('password1'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane.smith@example.com',
                'phone_number' => 2345678901,
                'password' => Hash::make('password2'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Alice Johnson',
                'email' => 'alice.johnson@example.com',
                'phone_number' => 3456789012,
                'password' => Hash::make('password3'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bob Brown',
                'email' => 'bob.brown@example.com',
                'phone_number' => 4567890123,
                'password' => Hash::make('password4'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Charlie Green',
                'email' => 'charlie.green@example.com',
                'phone_number' => 5678901234,
                'password' => Hash::make('password5'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
