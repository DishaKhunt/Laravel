<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\student;
use Illuminate\Support\Facades\File;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        for($i= 1; $i<=10; $i++){
            student::create([
                'name'=> fake()->name(),
                'email'=> fake()->unique()->email(),
                'phone_number'=> fake()->unique()->phoneNumber(),
                'city'=> fake()->unique()->city()
            ]);
        }
       


        // $students =collect(
        //     [
        //         [
        //             'name'=> 'Disha Khunt',
        //             'email'=> 'dishakhunt@gmail.com'
        //         ],
        //         [
        //             'name'=> 'Isha Patel',
        //             'email'=> 'ishapatel@gmail.com'
        //         ],
        //         [
        //             'name'=> 'Manshi Khunt',
        //             'email'=> 'manshikhunt@gmail.com'
        //         ]
        //     ]
        // );
           // $students->each(function($student){
        //     student::insert($student);
        // });

        // $json = File::get(path:'database/json/student.json');

        // $students = collect(json_decode($json));


        // $students->each(function($student){
        //     student::create([
        //         'name'=> $student->name,
        //         'email'=> $student->email
        //     ]);
        // });
       
    }
}
