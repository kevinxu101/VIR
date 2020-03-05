<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Teacher;
use App\section;
use App\student;
class StudentController extends Controller
{
    public function student(Request $req){
        if(Auth::check()){
            if(Auth::user()->type == "student"){
                return view('student_home')->withMessage("Student");
            }else return view('home');
        }else return view('auth/login');
    }
    public function index(){
        $student = DB::table('teachers')
            ->join('users','teachers.id', '=', 'users.id')
            ->join('teacher_subjects','teachers.teacherID', '=', 'teacher_subjects.teacherID')
            ->join('subjects','teacher_subjects.subjectID', '=', 'subjects.subjectID')
            ->join('students','subjects.subjectID', '=', 'students.subjectID')
            ->select('students.fname', 'students.lname')
            ->whereColumn('users.id', '=', 'students.subjectID')
            ->distinct()
            ->get();
        return view('teacher_class', compact('student'));
    }
}
