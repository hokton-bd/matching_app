<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lecture;
use App\Teacher;
use App\Subject;
use Illuminate\Support\Facades\DB;

class TeachersController extends Controller
{
    
    public function get_av_teachers() {

        $after = strtotime('+6 days');
        $after = date('Y-m-d', $after);

        $available_teachers = DB::table('teachers')
                                    ->join('subjects', 'teachers.subject_id', '=', 'subjects.id')
                                    ->join('lectures', 'teachers.id', '=', 'lectures.teacher_id')
                                    ->where('lectures.status', '=', 'A')
                                    ->whereBetween('lectures.date', [date('Y-m-d'), $after])
                                    ->orderBy('lectures.date', 'asc')
                                    ->get();

        return view('/student/reserve', ['available_teachers' => $available_teachers]);

    }


    public function show($id) {

        // $lecture_info = DB::table('lectures')
        //                     ->join('teachers', 'teachers.id', '=', 'lectures.teacher_id')
        //                     ->join('subjects', 'subjects.id', '=', 'teachers.subject_id')
        //                     ->where('lectures.id', '=', $id)
        //                     ->first();

        $lecture_info = Lecture::find($id);
        $teacher_id = $lecture_info->teacher_id;
        $teacher = Teacher::find($teacher_id);
        $name = $teacher->name;
        $subject = Subject::find($teacher->subject_id)->subject_name;

 
        return view('student.paycheck', ['lecture_info' => $lecture_info, 'teacher_name' => $name, 'subject' => $subject]);
                            

    }


}
