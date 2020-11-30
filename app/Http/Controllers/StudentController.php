<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $studs = Student::all();
        return view('index', ['studs' => $studs]);
    }

    public function show($id)
    {
        $student = Student::findOrFail($id);
        return view('student', ['student' => $student]);
    }

    public function create()
    {
    }

    public function destroy($id)
    {
        $stud = Student::find($id);
        $stud->delete();
    }
}
