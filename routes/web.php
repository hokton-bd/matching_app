<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckLogin;
use App\Http\Middleware\CheckStudent;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function() {
    return view('index');
})->name('index');

Route::get('index', function() {
    return view('index');
});

Route::get('/signup', 'SubjectController@get_subjects');
// Route::get('/signup', function() {
//     return view('signup');
// });

Route::post('signup/student', 'SignupController@signup_student');
Route::post('signup/teacher', 'SignupController@signup_teacher');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/user/login', 'LoginController@login')->name('user.login');


Route::get('logout', 'LogoutController@logout')->name('logout');


Route::middleware([CheckLogin::class])->group(function() {


    Route::middleware([CheckStudent::class])->group(function() {

        Route::get('/student/dashboard', function() {
            return view('student.dashboard');
            
        })->name('student/dashboard');

        Route::get('classes/reserve', 'TeachersController@get_av_teachers')->name('classes/reserve');

        Route::get('classes/paycheck/{id}', 'TeachersController@show');

        Route::post('/classes/charge/{id}', 'ChargeController@charge');

    });

    Route::middleware('check.teacher')->group(function() {

        Route::get('/teacher/dashboard', function() {
            return view('teacher.dashboard');
            
        })->name('teacher/dashboard');
    
        Route::get('/teacher/schedule', function() {
        
            return view('teacher/schedule');
            
        })->name('teacher/schedule');
    
        Route::get('/teacher/profile', function() {
        
            return view('teacher/profile');
            
        })->name('teacher/profile');

        Route::post('shift/add', 'ShiftController@add_lecture')->name('shift.add');

    });
    

    Route::get('contact', function() {

        return view('contact');

    })->name('contact');


});