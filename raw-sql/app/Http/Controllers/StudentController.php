<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function showStudent(){
      

        $students = DB::select("select * from students");

        // $students = DB::select("select name, age from students where name = ?", ["disha patel"]);

        // $students = DB::select("select name, age from students where age > ? and name like ?", [20, "i%"]);

        // $students = DB::select("select name, age from students where id = :id", ['id' => 3]);


        // $students = DB::insert("insert into students(name,email,age,city) values (?,?,?,?)", ["disha patel", "disha@gmail.com", 22, 2]);

        // $students = DB::update("update students set email = 'disha123@gmail.com' where id = ?", [1]);

        // $students = DB::delete("delete from students where id = ? ", [6]);


        // foreach($students as $student){
        //     echo $student->name;
        // }

        // $students = DB::statement("drop table students");

        // $students = DB::unprepared("delete from students where id = 5");

        $students = DB::table('students')
                        // ->selectRaw('name,age')
                        // ->selectRaw('count(*) as student_count , age')
                        ->select(DB::raw('count(*) as student_count'), 'age')
                        // ->whereRaw('age > ? and name like ?',[17, 'i%'])
                        // ->orderByRaw('age DESC')
                        // ->orderByRaw('age , name')
                        // ->where(DB::raw('age > ? and name like ?',[17, 'i%']))
                        ->groupByRaw('age, city')
                        ->havingRaw('age < ?', [20])
                        ->get();
                        // ->toSql();

                        
        return $students;
        // return view('welcome', compact('students'));
    }
    
}
