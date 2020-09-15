<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Teacher;
use App\AvailableDate;


class AjaxController extends Controller
{
    
    public function index(Request $request) {

        $ad_teachers = AvailableDate::where('date', '==', $request->date)->teacher;
        return response()->json(array('ad_teachers' => $ad_teachers), 200);

    }


}
