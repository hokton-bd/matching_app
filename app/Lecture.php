<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    
    public function teacher() {

        return $this->belongsTo('App\Teacher');

    }


}
