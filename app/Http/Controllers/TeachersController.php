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

        $available_teachers = DB::table('teachers')
                                    ->join('subjects', 'teachers.subject_id', '=', 'subjects.id')
                                    ->join('available_dates', 'teachers.id', '=', 'available_dates.teacher_id')
                                    ->whereBetween('available_dates.date', [date('Y-m-d'), $after])
                                    ->get();

        return view('/student/reserve', ['available_teachers' => $available_teachers]);

    }


}
