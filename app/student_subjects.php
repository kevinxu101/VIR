<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student_subjects extends Model
{
    public function subject(){
        return $this->hasMany(subject::class);
    }
    public function student(){
        return $this->hasMany(student::class);
    }
}
