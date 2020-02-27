<?php

namespace App\Exports;

use App\User;
use App\Enrollment;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportEnrollment implements FromCollection,WithHeadings
{
  
    public function collection()
    {
      return Enrollment::select([  'timestamp', 
      'status',
      'gradelevel',
       'LRN',
       'whatLRN',
      'CHECKLIST', 
      'Aware',
      'SEMESTER',
       'STRAND',
      'lname',
       'givenname',
      'mdname', 
      'extensionname',
      'sex', 
      'birth',
      'password',
      'age', 
      'indigenoucommunity',
      'ifyes', 
      'address',
      'baranggay', 
      'city',
      'zipcode', 
      'fathername',
      'mothername', 
      'telephonenumber',
      'cellphonenumber', 
      'studentcellphonenumber',
      'emailaddress', 
      'gradelevelcompleted',
      'lastschoolyearcompleted', 
      'schoolname',
      'schooladdress', 
      'schoolid',
      'ihereby', 
      'dateofcompleting',])->get();
    }

    public function headings(): array
     {
        return [
          'timestamp', 
          'status',
          'gradelevel',
           'LRN',
           'whatLRN',
          'CHECKLIST', 
          'Aware',
          'SEMESTER',
           'STRAND',
          'lname',
           'givenname',
          'mdname', 
          'extensionname',
          'sex', 
          'birth',
          'password',
          'age', 
          'indigenoucommunity',
          'ifyes', 
          'address',
          'baranggay', 
          'city',
          'zipcode', 
          'fathername',
          'mothername', 
          'telephonenumber',
          'cellphonenumber', 
          'studentcellphonenumber',
          'emailaddress', 
          'gradelevelcompleted',
          'lastschoolyearcompleted', 
          'schoolname',
          'schooladdress', 
          'schoolid',
          'ihereby', 
          'dateofcompleting',
         ];
      }
      
      
}
