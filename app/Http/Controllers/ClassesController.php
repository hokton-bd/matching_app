<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Student;
use App\Lecture;
use App\Subject;

class ClassesController extends Controller
{

    public function get_reserved(Request $request) {

        $student_id = Student::where('login_id', '=', $request->session()->get('login_id'))->value('id');
        $lectures = Db::table('lectures')
                            ->join('teachers', 'teachers.id', '=', 'lectures.teacher_id')
                            ->join('subjects', 'subjects.id', '=', 'lectures.subject_id')
                            ->where('lectures.student_id', '=', $student_id)
                            ->where('lectures.status', '=', 'R')
                            ->select('lectures.*', 'teachers.name', 'subjects.subject_name')
                            ->orderBy('lectures.date', 'desc')
                            ->get();

        return view('student.dashboard', ['lectures' => $lectures]);
        

    }
    
}
