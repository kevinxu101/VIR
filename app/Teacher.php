<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
        'fname',
        'lname',
        'email',
        'subject'
    ];

    public function section(){
        return $this->hasMany(section::class);
    }
    public function subject(){
        return $this->hasMany(subject::class);
    }
    public function user(){
        return $this->hasMany(User::class);
    }
}
