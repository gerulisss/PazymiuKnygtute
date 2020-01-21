<?php

namespace App\Http\Controllers;

use App\Grade;
use Illuminate\Http\Request;
use App\Student;
use App\Lecture;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $grades = Grade::all();
        $students = Student::all();
        $lectures = Lecture::all();
        return view('grade.index', ['grades' => $grades, 'students' => $students, 'lectures' => $lectures]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $students = Student::all();
        $lectures = Lecture::all();
       return view('grade.create', ['students' => $students, 'lectures' => $lectures]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $grade = new Grade;
        $grade->student_id = $request->student_id;
        $grade->lecture_id = $request->lecture_id;
        $grade->description = $request->grade_description;
        $grade->name = $request->grade_name;
        $grade->save();
        return redirect()->route('grade.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function show(Grade $grade)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function edit(Grade $grade)
    {
        $students = Student::all();
        $lectures = Lecture::all();
       return view('grade.edit', ['grade' => $grade,'students' => $students, 'lectures' => $lectures]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Grade $grade)
    {
        $grade->student_id = $request->student_id;
        $grade->lecture_id = $request->lecture_id;
        $grade->description = $request->grade_description;
        $grade->name = $request->grade_name;
        $grade->save();
        return redirect()->route('grade.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grade $grade)
    {
        $grade->delete();
        return redirect()->route('grade.index');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
