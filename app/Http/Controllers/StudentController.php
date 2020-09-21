<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Login;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    
    public function show(Request $request) {

        $info = DB::table('logins')
                    ->join('students.login_id', '=', 'logins.id')
                    ->where('logins.id', '=', $request->session()->get('login_id'))
                    ->get();

        return view('student.profile', compact($info) );

    }


}
