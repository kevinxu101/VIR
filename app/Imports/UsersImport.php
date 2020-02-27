<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use App\Imports\FirstSheetImport;
use App\Imports\ImportContacts;
use Maatwebsite\Excel\Concerns\SkipsUnknownSheets;
class UsersImport implements WithMultipleSheets,SkipsUnknownSheets
{
    
    public function sheets(): array
    {
         
      /*  
        return [
            
            
                new ImportContacts(),
                     
        ];

        */
      

        $result = [];
        for ($i = 0;$i < 50; $i++) {
       
            $result[$i] =  new ImportContacts();
        }
        return $result;


    
          

         

    }

     public function onUnknownSheet($sheetName)
    {
        // E.g. you can log that a sheet was not found.
        info("Sheet {$sheetName} was skipped");
    }


}
