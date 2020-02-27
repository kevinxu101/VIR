<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    protected $table = 'enrollment';
    protected $primaryKey = 'id';

    public $timestamps = false;
    
    protected $fillable = [
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

