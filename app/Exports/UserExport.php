<?php

namespace App\Exports;

use App\User;
use App\Contact;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UserExport implements FromCollection,WithHeadings
{
  /*
    public function collection()
    {
      return Contact::select(['id','name','email'])->get();
    }

    public function headings(): array
     {
        return [
          'id',
          'name',
          'email',
         ];
      }
      */
      
}
