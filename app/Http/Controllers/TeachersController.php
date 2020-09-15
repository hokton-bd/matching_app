<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AvailableDate;
use App\Teacher;
use Illuminate\Support\Facades\DB;

class TeachersController extends Controller
{
    
    public function get_av_teachers() {

        $after = strtotime('+3 days');
        $after = date('Y-m-d', $after);

        $teacher_id = AvailableDate::where('date', '<=', $after)->value('teacher_id');
        $available_teachers = DB::table('teachers')
                                    ->join('subjects', 'teachers.subject_id', '=', 'subjects.id')
                                    ->join('available_dates', 'teachers.id', '=', 'available_dates.teacher_id')
                                    ->where('teachers.id', '=', $teacher_id)
                                    ->get();


        return view('/student/reserve', ['available_teachers' => $available_teachers]);

    }


}
