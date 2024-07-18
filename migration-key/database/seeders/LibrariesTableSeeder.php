<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LibrariesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('libraries')->insert([
            [
                'stu_id' => 1,
                'book' => 'The Great Gatsby',
                'due_date' => '2024-07-15',
                'status' => true,
            ],
            [
                'stu_id' => 2,
                'book' => '1984',
                'due_date' => '2024-07-20',
                'status' => false,
            ],
            [
                'stu_id' => 3,
                'book' => 'To Kill a Mockingbird',
                'due_date' => '2024-08-01',
                'status' => true,
            ],
            [
                'stu_id' => 4,
                'book' => 'Moby Dick',
                'due_date' => null,
                'status' => false,
            ],
            [
                'stu_id' => 5,
                'book' => 'Pride and Prejudice',
                'due_date' => '2024-07-25',
                'status' => true,
            ],
        ]);
    }
}
