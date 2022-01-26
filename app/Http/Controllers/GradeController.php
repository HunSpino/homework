<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    public function index(){
        $grades = Grade::orderBy('person')->get();
        return view('grades.index', [ 'grades' => $grades]);
    }

    public function shown(Grade $grade){
        return view('grades.show', ['grade' => $grade]);
    }
}
