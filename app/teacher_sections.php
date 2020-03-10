<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class teacher_sections extends Model
{
    protected $fillable = [
        'teacher_sectionID',
        'teacherID',
        'sectionID',
    ];
    public function section(){
        return $this->hasMany(section::class);
    }
    public function teacher(){
        return $this->hasMany(teacher::class);
    }
}
