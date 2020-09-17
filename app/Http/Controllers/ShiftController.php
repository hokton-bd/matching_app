<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Login;
use App\Teacher;
use App\Lecture;

class ShiftController extends Controller
{

    public function add_lecture(Request $request) {
        $ad = new Lecture;
        
        $login_id = $request->session()->get('login_id');
        $user = Login::find($login_id);
        $teacher = $user->teacher;
        $ad->teacher_id = $teacher->id;
        $ad->date = $request->date;
        $ad->start_time = $request->start_time;
        $ad->end_time = $request->start_time + 1;

        $ad->save();

        return redirect()->route('teacher/schedule');

    }


}
