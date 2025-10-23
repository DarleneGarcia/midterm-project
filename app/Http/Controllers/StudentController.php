<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Section;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // Show all students
    public function index()
    {
        $students = Student::with('section')->get();
        return view('students.index', compact('students'));
    }

    

    // Save new student
    public function store(Request $request)
    {
        Student::create($request->all());
        return redirect()->route('students.index');
    }

    // // Show form to edit student
    // public function edit($id)
    // {
    //     $student = Student::findOrFail($id);
    //     $sections = Section::all();
    //     return view('students.edit', compact('student', 'sections'));
    // }
    
    // // Show form to add a student
    // public function create()
    // {
    //     $sections = Section::all();
    //     return view('students.create', compact('sections'));
    // }
    public function create()
    {
    $sections = Section::all();
    $yearLevels = Section::select('yearLevel')->distinct()->pluck('yearLevel');
    return view('students.create', compact('sections', 'yearLevels'));
    }

    public function edit($id)
    {
    $student = Student::findOrFail($id);
    $sections = Section::all();
    $yearLevels = Section::select('yearLevel')->distinct()->pluck('yearLevel');
    return view('students.edit', compact('student', 'sections', 'yearLevels'));
    }


    // Update student
    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);
        $student->update($request->all());
        return redirect()->route('students.index');
    }

    // Delete student
    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
        return redirect()->route('students.index');
    }

    //View
    public function show($id)
    {
    $student = Student::with('section')->findOrFail($id);
    return view('students.show', compact('student'));
    }

}
