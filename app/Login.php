<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    
    public function student() {

        return $this->hasOne('App\Student');

    }

    public function teacher() {

        return $this->hasOne('App\Teacher');

    }


}
