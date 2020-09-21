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

        $lecture_info = Lecture::find($id);
        $teacher_id = $lecture_info->teacher_id;
        $teacher = Teacher::find($teacher_id);
        $name = $teacher->name;
        $subject = Subject::find($teacher->subject_id)->subject_name;

 
        return view('student.paycheck', ['lecture_info' => $lecture_info, 'teacher_name' => $name, 'subject' => $subject]);
                            

    }

    public function showComingClasses(Request $request) {

        $teacher_id = Teacher::where('login_id', '=', $request->session()->get('login_id'))->value('id');
        $lectures = DB::table('lectures')
                        ->join('students', 'students.id', '=', 'lectures.student_id')
                        ->where('lectures.teacher_id', '=', $teacher_id)
                        ->where('lectures.date', '>=', date('Y-m-d'))
                        ->where('lectures.status', '=', 'R')
                        ->select('lectures.*', 'students.name')
                        ->orderBy('lectures.date', 'desc')
                        ->get();

        return view('teacher.dashboard', ['coming_lectures' => $lectures]);


    }


}
