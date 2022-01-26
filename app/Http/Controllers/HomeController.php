<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $personCount = Grade::count();
        $subjectCount = Grade::count();

        return view('stats',[
            'personCount' =>$personCount,
            'subjectCount' => $subjectCount
        ]);
    }
}
