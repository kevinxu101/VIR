<?php

namespace App\Http\Controllers;
use Maatwebsite\Excel\Facades\Excel; 
use Illuminate\Http\Request; 
use App\Imports\ImportEnrollment;
use App\Enrollment;
use Illuminate\Database\Collection;
use Redirect;

class CsvController extends Controller
{
  
      public function showdata(){
        $data = Enrollment::all(); 
        return view('users',['users'=>$data]); 
      }





      public function import(Request $request) 
      {

        if($request->hasFile('import_file'))
        { 
          
          Excel::import(new ImportEnrollment(), request()->file('import_file'));

          return back();    
           
        }else{

  
          
          return back()->with('error',"ERRORR!!!!!!!!!");
  
        }


               

   


      }

  
  }

  
?>