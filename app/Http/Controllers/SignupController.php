<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Login;
use App\Student;
use App\Teacher;
use App\Teacher_subjects;

class SignupController extends Controller
{
    
    public function signup_student(Request $request) {

        $validation = $request->validate([
            'email' => ['required', 'unique:logins'],
        ]);

        $login = new Login();
        $student = new Student();

        $login->email = $request->email;
        $hash = Hash::make($request->password);
        $login->password = $hash;
        $login->status = $request->status;
        $login->save();

        $login_id = $login->id;

        $student->name = $request->name;
        $student->login_id = $login_id;
        $student->grade = $request->grade;
        $student->save();

        $info = Login::find($login_id)->student;
        session(['login_id' => $login_id]);
        session(['name' => $student->name]);
        session(['status' => 'S']);

        return redirect()->route('student/dashboard');

    }
    
    public function signup_teacher(Request $request) {

        $validation = $request->validate([
            'email' => ['required', 'unique:logins'],
        ]);

        $login = new Login();
        $teacher = new Teacher();

        $login->email = $request->email;
        $hash = Hash::make($request->password);
        $login->password = $hash;
        $login->status = $request->status;
        $login->save();

        $login_id = $login->id;

        $teacher->name = $request->name;
        $teacher->login_id = $login_id;
        $teacher->grade = $request->grade;
        $teacher->subject_id = $request->subject;
        $teacher->save();

        session(['login_id' => $login_id]);
        session(['name' => $teacher->name]);
        session(['status' => 'T']);

        return redirect()->route('teacher/dashboard');

    }


}
