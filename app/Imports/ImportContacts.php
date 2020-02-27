<?php

namespace App\Imports;

use App\Contact;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ImportContacts implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        //use a logic that will compare yung value sa database and yung sa excel
        // if may hindi kaparehas use yung update
        //
        return new Contact([  
        
          'name' => $row['nameexcel'],
            'email' => $row['emailexcel'],   
            'subjetcs' => "WEBDEV",
         ]);
       }
}
