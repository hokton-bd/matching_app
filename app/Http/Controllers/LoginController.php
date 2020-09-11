<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\HomeController;

class LoginController extends Controller
{
    
    public function login(Request $request) {


        $flag = DB::table('logins')->where('email', $request->email)->exists();
        if($flag == true) {

            $hashedPassword = DB::table('logins')->where('email', $request->email)->value('password');
            if(Hash::check($request->password, $hashedPassword)) {

                $user = DB::table('logins')->where('email', $request->email)->first();
                session(['login_id' => $user->id]);
                session(['status' => $user->status]);
    
                if($user->status == 'S') {
    
                    $info = DB::table('students')->find($user->id);
                    session(['name' => $info->name]);
    
                    return redirect()->route('student_dashboard');
    
                } else if($user->status == 'T') {
    
                    $info = DB::table('teachers')->find($user->id);
                    session(['name' => $info->name]);
    
                    return redirect()->route('teacher_dashboard');
    
                }
        
            } else {
        
                    return redirect('index');
        
            }

            }

    }



}
