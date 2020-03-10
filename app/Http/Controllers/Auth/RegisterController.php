<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Teacher;
use App\teacher_sections;
use App\teacher_subject;
use App\User;
 use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;




    protected function redirectTo(){
        if(Auth::user()->type == "admin"){
         $this->redirectTo = '/admin_dashboard';
         return $this->redirectTo;
        }
        if(Auth::user()->type == "student"){
         $this->redirectTo = '/student_home';
         return $this->redirectTo;
        }
        if(Auth::user()->type == "teacher"){
            $this->redirectTo = '/teacher_dashboard';
            return $this->redirectTo;
           }
     }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        //unqiue:users means only one can have that data
        return Validator::make($data, [
            'username' => ['required', 'string', 'max:30'],
            'fname' => ['required', 'string', 'max:30'],
            'lname' => ['required', 'string', 'max:15'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function create(array $data)
    {
         $user = User::create([
            'username' => $data['username'],
            'fname' => $data['fname'],
            'lname' => $data['lname'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'type' => $data['type']
        ]);
        if($data['type'] == "teacher"){
            Teacher::create([
                'teacherID' => 1,
                'fname' =>  $data['fname'],
                'lname' =>  $data['lname'],
                'email' =>  $data['email'],
            ]);
            teacher_subject::create([
                'teacher_subjectID' => 1,
                'teacherID' => 1,
                'subjectID' => $data['subjectID'],
            ]);
            teacher_sections::create([
                'teacher_sectionID' => 1,
                'teacherID' => 1,
                'sectionID' => $data['sectionID'],
            ]);
        }


       return $user;
    }
}
