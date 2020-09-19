<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    
    public function teacher() {

        return $this->belongsTo('App\Teacher');

    }

    public function student() {

        return $this->belongsTo('App\Student');

    }

    public function subject() {

        return $this->belongsToMany('App\Subject');

    }


}
