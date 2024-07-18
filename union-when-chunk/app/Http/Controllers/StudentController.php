<?php

namespace App\Http\Controllers;

use Illuminate\Database\Query\JoinClause;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function showStudent(){
      

        $students = DB::table('students')
        ->leftJoin('cities','students.city', '=', 'cities.id')
        ->get();

        // $students = DB::table('students')
        // ->leftJoin('cities', function(JoinClause $join){
        //     $join->on('students.city', '=', 'cities.id')
        //     ->where('students.name', 'like','d%');

        // })
        // ->select('students.*','cities.city_name')
        // ->get();


        // return $students;
        // return view('home', ['data' => $students]);

        return view('welcome', compact('students'));
    }

    public function uniondata(){
        $lectures = DB::table('lectures')
                        ->select('name','email', 'city_name')
                        ->join('cities','lectures.city', '=', 'cities.id')
                        ->where('city_name','=','rajkot');

        $students = DB::table('students')
                        ->union($lectures)
                        ->select('name','email','city_name')
                        ->join('cities','students.city', '=', 'cities.id')
                        ->where('city_name','=','surat')
                        ->get();
                        // ->toSql();

        return $students;
        return view('union', compact('students'));
    }

    public function whendata(){

        $test = true;

        $students = DB::table('students')
                    ->when($test,function($query){
                        $query->where('age','>',20);
                    },function($query){
                        $query->where('age','<',20);
                    })
                    ->get();

        // return $students;
        return view('when', compact('students'));
    }

    public function chunkdata(){

        // $students = DB::table('students')
        //                 ->orderBy('id')
        //                 ->chunk(2, function($students){
        //                     echo "<div style='border: 1px solid red; margin-bottom:15px;'>";
        //                     foreach($students as $student){
        //                         echo $student->name."<br>";
        //                     }
        //                     echo "</div>";
        //                 });

        $students = DB::table('students')
                        ->orderBy('id')
                        ->chunkById(2, function($students){
                            
                            foreach($students as $student){
                               DB::table('students')
                                   ->where('id',$students->id)
                                   ->update(['status'=> true]);
                            }
                            echo "</div>";
                        });

    }
}
