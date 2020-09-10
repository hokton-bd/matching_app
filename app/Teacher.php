<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Login;

class Teacher extends Model
{
    
    public function login() {

        $this->hasOne('App\Login');

    }


}
