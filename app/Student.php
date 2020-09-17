<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Laravel\Cashier\Billable;

class Student extends Model
{

    use Billable;
    use Notifiable;
    
    public function login() {

        return $this->hasOne('App\Login');

    }

}
