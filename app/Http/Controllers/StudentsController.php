<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $students = Student::all();

      return view('students.index', compact('students'));
    }
    public function create()
    {
        return view('students.create', compact('students'));
    }
    public function store(Request $request)
    {
        // $student = new Student;
        // $student->name = $request->name;
        // $student->nim = $request->nim;
        // $student->email = $request->email;
        // $student->prodi = $request->prodi;
        //
        // $student->save();
        // $request->validate([
        // 'name' => 'required',
        // 'nim' => 'required|size:9',
        // ]);

        Student::create($request->all());

        return redirect('/students')->with('status', 'Student Created!');
    }
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }
    public function edit(Student $student)
    {
       return view('students.edit', compact('student'));
    }
    public function update(Request $request, Student $student)
    {
        Student::where('id', $student->id)
          ->update([
            'name' => $request->name,
            'nim' => $request->nim,
            'email' => $request->email,
            'prodi' => $request->prodi
          ]);

        return redirect('/students')->with('status', 'Student Updated!');
    }
    public function destroy(Student $student)
    {
        Student::destroy($student->id);
        return redirect('/students')->with('status', 'Student Delete!');
    }
}
