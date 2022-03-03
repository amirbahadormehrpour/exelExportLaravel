<?php

namespace App\Http\Controllers;

use App\Exports\StudentExport;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    protected function index()
    {
        return (new StudentExport)->download('student.xlsx');
    }
}
