<?php

namespace App\Imports;

use App\Enrollment;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;
HeadingRowFormatter::default('none');

class ImportEnrollment implements ToModel,WithHeadingRow
{
 
    public function model(array $row)
    {
      
        $now = new \DateTime();

        return new Enrollment([  

          'created_at'=> $now,
          'status'=> $row['status'],
          'gradelevel'=> $row['gradelevel'],
           'lrn'=> $row['lrn'],
           'whatlrn'=> $row['whatlrn'],
          'checklist'=> $row['checklist'],
          'aware'=> $row['aware'],
          'semester'=> $row['semester'],
           'strand'=> $row['strand'],
          'lname'=> $row['lname'],
           'gname'=> $row['givenname'],
          'mname'=> $row['mdname'],
          'ename'=> $row['extensionname'],
          'sex'=> $row['sex'],
        //  'birth'=> $row['birth'],

          //'birth' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['birth'])->format('Y-m-d'),
         'birth'=> $row['birth'],
          'password'=> $row['birth'],  
          'age'=> $row['age'],
          'indigenoucommunity'=> $row['indigenoucommunity'],
          'ifyes'=> $row['ifyes'],
          'address'=> $row['address'],
          'baranggay'=> $row['baranggay'],
          'city'=> $row['city'],
          'zipcode'=> $row['zipcodezipcode'],
          'fathername'=> $row['fathername'],
          'mothername'=> $row['mothername'],
          'telephonenumber'=> $row['telephonenumber'],
          'cellphonenumber'=> $row['cellphonenumber'],
          'studentcellphonenumber'=> $row['studentcellphonenumber'],
          'emailaddress'=> $row['emailaddress'],
          'gradelevelcompleted'=> $row['gradelevelcompleted'],
          'lastschoolyearcompleted'=> $row['lastschoolyearcompleted'],
          'schoolname'=> $row['schoolname'],
          'schooladdress'=> $row['schooladdress'],
          'schoolid'=> $row['schoolid'],
          'ihereby'=> $row['ihereby'],
          'dateofcompleting'=> $row['dateofcompleting'],

         ]);
       }
}
