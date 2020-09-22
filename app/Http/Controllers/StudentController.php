<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Login;
use Illuminate\Support\Facades\DB;
use App\Student;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{
    
    public function show(Request $request) {

        $info = DB::table('logins')
                    ->join('students', 'students.login_id', '=', 'logins.id')
                    ->where('logins.id', '=', $request->session()->get('login_id'))
                    ->first();
        
        if(Storage::url('images/students/user_'.$info->id.'.png')) {

            $link = Storage::url('images/students/user_'.$info->id.'.png');

        } else if(Storage::url('images/students/user_'.$info->id.'.jpg')) {

            $link = Storage::url('images/students/user_'.$info->id.'.jpg');

        } else if(Storage::url('images/students/user_'.$info->id.'.jpeg')) {

            $link = Storage::url('images/students/user_'.$info->id.'.jpeg');

        } else {

            $link = Storage::url('images/students/user-dummy.png');

        }

        return view('student.profile', ['info' => $info, 'image_link' => $link] );

    }

    public function update(Request $request) {

        $login_info = Login::find($request->session()->get('login_id'))->first();
        $student_info = Student::where('login_id', '=', $login_info->id)->first();

        if($request->name != $student_info->name) {

            $student_info->name = $request->name;
            $student_info->save();
            
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

            $request->file('image')->storeAs('\public\images\students', $file_name);

            $student_info->image = $file_name;
            $student_info->save();

        }
    
    return redirect()->route('student.profile');
    
    }

}
