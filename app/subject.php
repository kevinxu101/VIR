<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subject extends Model
{
    public function student(){
        return $this->hasMany(student::class);
    }
    public function teacher_subject(){
        return $this->belongsTo(teacher_subject::class);
    }
}
