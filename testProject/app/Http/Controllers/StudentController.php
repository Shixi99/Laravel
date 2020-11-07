<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
Use DB;

class StudentController extends Controller
{
    function index(){
        $student_data = DB::select('select * from students');
        return view('student', ["students" => $student_data]);
        // return "I'm in controller";
    }
}
