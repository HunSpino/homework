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

    public function create()
    {
        return view('grades.create');
    }

    public function store(Request $request)
    {
        $adatok = $request->only(['person', 'subject', 'type', 'grade']);
        $grade = new Grade();
        $grade->full($adatok);
        $grade->save();
        return redirect()->route('grades.index');
    }
    public function edit($id){
        $grade = Grade::find($id);
        return view('grades.edit', [ 'grade' => $grade]);
    }

}
