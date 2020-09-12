<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Login;
use App\Teacher;
use App\AvailableDate;

class ShiftController extends Controller
{

    public function add_available_date(Request $request) {
        $ad = new AvailableDate;
        
        $login_id = $request->session()->get('login_id');
        $user = Login::find($login_id);
        $teacher = $user->teacher;
        $ad->teacher_id = $teacher->id;
        $ad->date = $request->date;
        $ad->start_time = $request->start_time;
        $ad->end_time = $request->end_time;
        $ad->save();

        return redirect()->route('teacher/schedule');

    }


}
