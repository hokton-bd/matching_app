<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    
    public function teacher_subjects() {

        return $this->hasMany('App\Teacher_subjects');

    }


}
