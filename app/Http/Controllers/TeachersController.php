<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lecture;
use App\Teacher;
use App\Subject;
use App\Login;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

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

    public function showProfile(Request $request) {

        $info = DB::table('logins')
                    ->join('teachers', 'logins.id', '=', 'teachers.login_id')
                    ->where('logins.id', '=', $request->session()->get('login_id'))
                    ->first();

        $link = Storage::url('/images/teachers/'.$info->image);

        return view('teacher.profile', ['info' => $info, 'image_link' => $link] );

    }

    public function update(Request $request) {

        $login_info = Login::find(5);
        $teacher_info = Teacher::where('login_id', '=', $login_info->id)->first();

        if($request->name != $teacher_info->name) {

            $teacher_info->name = $request->name;
            $teacher_info->save();
            
        }

        if($request->email != $login_info->email) {

            $check = DB::table('logins')->where('email', '=', $request->email)->get();
            
            if($check->count() == 0) {

                $login_info->email = $request->email;
                $login_info->save();

            }

        }

        if($request->hasFile('image')) {

            $extension = $request->image->extension();
            $file_name = 'user_'.$request->session()->get('login_id').'.'.$extension;

            $request->file('image')->storeAs('\public\images\teachers', $file_name);

            $teacher_info->image = $file_name;
            $teacher_info->save();

        }
    
    return redirect()->route('teacher.profile');

    }


}
