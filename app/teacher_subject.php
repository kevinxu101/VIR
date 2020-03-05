<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class teacher_subject extends Model
{
    public function subject(){
        return $this->hasMany(subject::class);
    }
    public function section(){
        return $this->hasMany(section::class);
    }
}
