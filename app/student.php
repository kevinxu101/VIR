<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    public function section(){
        return $this->hasMany(section::class);
    }
    public function subject(){
        return $this->belongsTo(subject::class);
    }
    public function grade(){
        return $this->belongsTo(grade::class);
    }
}
