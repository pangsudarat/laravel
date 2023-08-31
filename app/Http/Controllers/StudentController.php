<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $students = Student::all();

        return view('view_student', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $students = new Student();
        $student->fullname = $_POST['fullname'] ?? "emty";
        $student->program = $_POST['programe'] ?? "emty";
        $student->income = $_POST['program'] ?? "emty";
        $student->fullname = $_POST['fullname'] ?? "emty";
        $student->gpa = (int)($_POST['gpa'] ?? 0);
        
        $student->save();
        return redirect('/student');
    }

}
