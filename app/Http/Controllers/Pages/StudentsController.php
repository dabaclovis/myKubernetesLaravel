<?php

namespace App\Http\Controllers\Pages;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('students.index',[
            'students' => Student::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'sname' => ['required','string','max:150' ],
            'grades' => [ 'required','string','max:150'],
        ]);

        DB::table('students')->insert([
            'sname' => $request->input('sname'),
            'grades' => $request->input('grades'),
            'papers' => json_encode($request->input('subjects')),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}
