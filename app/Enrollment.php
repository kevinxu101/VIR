<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    protected $table = 'enrollmenttable';
    protected $primaryKey = 'id';

    public $timestamps = false;
    
    protected $fillable = [
        'created_at', 
        'status',
        'gradelevel',
         'lrn',
         'whatlrn',
        'checklist', 
        'aware',
        'semester',
         'strand',
        'lname',
         'gname',
        'mname', 
        'ename',
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

