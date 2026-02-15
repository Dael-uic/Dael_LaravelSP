<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    
    public function create()
    {
        return view('students.create');
    }

    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'student_id' => 'required|unique:students',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email|unique:students',
            'phone' => 'nullable|string',
            'date_of_birth' => 'nullable|date',
            'gender' => 'nullable|string',
            'address' => 'nullable|string',
            'city' => 'nullable|string',
            'state' => 'nullable|string',
            'postal_code' => 'nullable|string',
            'country' => 'nullable|string',
            'enrollment_date' => 'required|date',
            'program' => 'nullable|string',
            'gpa' => 'nullable|numeric|between:0,4',
            'status' => 'nullable|in:active,inactive,graduated,suspended',
        ]);

        Student::create($validated);
        return redirect()->route('students.index')->with('success', 'Student created successfully!');
    }

    
    public function show(string $id)
    {
        $student = Student::findOrFail($id);
        return view('students.show', compact('student'));
    }

    
    public function edit(string $id)
    {
        $student = Student::findOrFail($id);
        return view('students.edit', compact('student'));
    }

    
    public function update(Request $request, string $id)
    {
        $student = Student::findOrFail($id);
        
        $validated = $request->validate([
            'student_id' => 'required|unique:students,student_id,' . $id,
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email|unique:students,email,' . $id,
            'phone' => 'nullable|string',
            'date_of_birth' => 'nullable|date',
            'gender' => 'nullable|string',
            'address' => 'nullable|string',
            'city' => 'nullable|string',
            'state' => 'nullable|string',
            'postal_code' => 'nullable|string',
            'country' => 'nullable|string',
            'enrollment_date' => 'required|date',
            'program' => 'nullable|string',
            'gpa' => 'nullable|numeric|between:0,4',
            'status' => 'nullable|in:active,inactive,graduated,suspended',
        ]);

        $student->update($validated);
        return redirect()->route('students.index')->with('success', 'Student updated successfully!');
    }

    
    public function destroy(string $id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Student deleted successfully!');
    }
}
