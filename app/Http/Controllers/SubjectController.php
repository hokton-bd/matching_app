<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;

class SubjectController extends Controller
{
    
    public function get_subjects() {
        
        $subjects = Subject::all();
        return view('register', compact('subjects'));

    }

}
