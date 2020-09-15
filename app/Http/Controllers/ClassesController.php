<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClassesController extends Controller
{

    public function get_av_teachers() {
        
        return redirect()->route('classes/reserve');

    }
    
}
