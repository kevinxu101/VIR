<?php

namespace App\Http\Controllers;
use App\Exports\UserExport; 
use Maatwebsite\Excel\Facades\Excel; 
use Illuminate\Http\Request; 
use App\User; 
use App\Imports\ImportContacts; 
use App\Imports\UsersImport; 
use App\Exports\ContactExport; 
use App\Exports\ExportEnrollment; 
use App\Imports\ImportEnrollment;
use App\Imports\FirstSheetImport;
use App\Imports\update;
use App\Contact;
use Illuminate\Database\Collection;

class CsvController extends Controller
{
      public function export(){
        return Excel::download(new ExportEnrollment, 'Contacts.csv'); 
      } 
  
      public function showdata(){
        $data = Contact::all(); 
        return view('users',['users'=>$data]); 
      }


      public function update(Request $request) 
      {

     
      Excel::import(new update, request()->file('import_fileUPDATE'));

      return back(); 


      }




      public function import(Request $request) 
      {

//$import->onlySheets('Worksheet 1', 'Worksheet 3');

/*

// add & to have var passed by reference
Excel::import($fileDetails['import_file'], function($sheet) use(&$counter) {
    // add & to have var passed by reference
    $sheet->each(function($sheet) use(&$counter) {
        echo "It works</br>"; 
        $counter++;
    });
});
echo $counter;
exit;
$counter=0;
Session::put($counterget,  $counter);
*/






        Excel::import(new ImportEnrollment(), request()->file('import_file'));

        return back();    

     /*
      Excel::import(new ImportContacts, request()->file('import_file'));

      return back();  
*/
   /*
   
        if(auth()->user()->id !== $post->user_id){
            return redirect('/posts')->with('error','Unauthorized page');
        }
        
        $post ->title = $request->input('title');
        $post ->body = $request->input('body');
      

        $post->save();




      */




      }

      /*
      public function importsave(Request $request) 
      {

     //   $users = Excel::toCollection(new ImportContacts, request()->file('import_file'));



        $data = Excel::toArray(new ImportContacts, request()->file('import_file')); 

        return  $data
  


      

        */
  
  }

  
?>