<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;
use App\section;
use App\teacher_sections;
use App\teacher_subject;
use App\Teacher;
use App\student;
use App\subject;

class StudentListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $uid = Auth::user()->id;
       /*$student = DB::table(DB::raw('(students, teachers)'))
            ->join('teacher_sections','teachers.teacherID', '=', 'teacher_sections.teacherID')
            ->join('student_subjects','student_subjects.studentID', '=', 'student_subjects.subjectID')
            ->join('sections','sections.sectionID','=','teacher_sections.sectionID')
            ->join('teacher_subjects','teachers.teacherID', '=', 'teacher_subjects.teacherID')
            ->join('subjects','teacher_subjects.subjectID', '=', 'subjects.subjectID')
            ->select('students.fname', 'students.lname', 'students.year_level', 'subjects.subject_name')
            ->where([
                ['teachers.teacherID', '=', $uid],
                ['teacher_sections.sectionID', '=', 'student.sectionID'],
                ['teacher_subjects.subjectID', '=', 'student_subjects.subjectID']
            ])
            //Alternative:
            /*->where(DB::raw("teachers.teacherID = '$uid' and teacher_sections.sectionID
                    =students.sectionID and student_subjects.subjectID = teacher_subjects.subjectID")) //to get the teacher based on the sessionID*/
            /*->distinct()
            ->get();
            return view('teacher_class', compact('student'));*/

        $student = DB::select("SELECT DISTINCT students.studentID,students.fname, students.lname, students.year_level, subjects.subject_name
                FROM students, teachers
                JOIN student_subjects ON student_subjects.studentID = student_subjects.subjectID
                JOIN teacher_subjects ON (teachers.teacherID = teacher_subjects.teacherID)
                JOIN subjects ON teacher_subjects.subjectID = subjects.subjectID
                JOIN teacher_sections ON teachers.teacherID = teacher_sections.teacherID
                JOIN sections ON sections.sectionID = teacher_sections.sectionID
                WHERE teachers.teacherID = '$uid' and teacher_sections.sectionID = students.sectionID
                AND teacher_subjects.subjectID = student_subjects.subjectID");
            //Alternative:
            /*->where(DB::raw("teachers.teacherID = '$uid' and teacher_sections.sectionID
                    =students.sectionID and student_subjects.subjectID = teacher_subjects.subjectID")) //to get the teacher based on the sessionID*/
            collect($student);
        return view('teacher_class', compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
