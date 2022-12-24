<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::paginate(10);
        return inertia('Student/Index', [
            'students' => $students
        ]);
    }
}
