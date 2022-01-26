<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $gradeCount = Grade::count();

        return view('stats',[
            'gradeCount' => $gradeCount
        ]);
    }
}
