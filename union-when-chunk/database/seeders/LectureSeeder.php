<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\lecture;

class LectureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(path: 'database/json/lecture.json');
        $students = collect(json_decode($json));

        $students->each(function ($student) {
            Lecture::create([
                'name' => $student->name,
                'email' => $student->email,
                'age' => $student->age,
                'city' => $student->city
            ]);
        });
    }
}
