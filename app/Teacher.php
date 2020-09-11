<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    
    public function login() {

       return $this->hasOne('App\Login');

    }

    public function teacher_subjects() {


        return $this->hasMany('App\Teacher_subjects');

    }


}
