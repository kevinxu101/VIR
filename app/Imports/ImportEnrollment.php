<?php

namespace App\Imports;

use App\Enrollment;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ImportEnrollment implements ToModel,WithHeadingRow
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
        $now = new \DateTime();

        return new Enrollment([  

          'timestamp'=> $now,
          'status'=> $row['status'],
          'gradelevel'=> $row['gradelevel'],
           'LRN'=> $row['lrn'],
           'whatLRN'=> $row['whatlrn'],
          'CHECKLIST'=> $row['checklist'],
          'Aware'=> $row['aware'],
          'SEMESTER'=> $row['semester'],
           'STRAND'=> $row['strand'],
          'lname'=> $row['lname'],
           'givenname'=> $row['givenname'],
          'mdname'=> $row['mdname'],
          'extensionname'=> $row['extensionname'],
          'sex'=> $row['sex'],
          'birth'=> $row['birth'],
          'password'=> $row['birth'],
          'age'=> $row['age'],
          'indigenoucommunity'=> $row['indigenoucommunity'],
          'ifyes'=> $row['ifyes'],
          'address'=> $row['address'],
          'baranggay'=> $row['baranggay'],
          'city'=> $row['city'],
          'zipcode'=> $row['zipcode'],
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
