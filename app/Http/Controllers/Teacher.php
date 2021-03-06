<?php

namespace App\Http\Controllers;

use App\Teacher as AppTeacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\section;
use App\student;
class Teacher extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $uid = Auth::user()->id;
        $section = DB::select("SELECT DISTINCT sections.section_name FROM (sections as sec,teachers)
                                        JOIN teacher_sections ON teachers.teacherID = teacher_sections.teacherID
                                        JOIN sections ON sections.sectionID = teacher_sections.sectionID
                                       WHERE teachers.teacherID = '$uid' and sections.sectionID = teacher_sections.sectionID");
        collect($section);
        return view('teacher_dashboard', compact('section'));
        //$Teacher = AppTeacher::all();
        //return view('index', compact('Teacher'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'fname'=>'required',
            'lname'=>'required',
            'email'=>'required',
            'subject' =>'required'
        ]);

        $Teacher = new AppTeacher([
           'fname' => $request->get('fname'),
           'lname' => $request->get('lname'),
           'email' => $request->get('email'),
           'subject' => $request->get('subject'),

        ]);
        $Teacher->save();
        return redirect('Teacher')->with('success', 'Contact saved!');
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
