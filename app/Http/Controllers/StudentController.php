<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use Class Student
use App\Student;

// Class StudentController
class StudentController extends Controller
{
    public function studentView() {
      $students = Student::all();

      return view("students", compact("students"));
    }
}
