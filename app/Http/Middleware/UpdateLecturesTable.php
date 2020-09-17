<?php

namespace App\Http\Middleware;

use Closure;
use App\Lecture;
use App\Student;

class UpdateLecturesTable
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $id)
    {
       
        $response = $next($request);

        $lecture = Lecture::find($id);
        $lecture->status = 'R';
        $student_id = Student::find($request->session()->get('login_id'));
        $lecture->student_id = $student_id;
        $lecture->save();

        return $response;


    }
}
