<?php
// --------------------- https://docs.laravel-excel.com/ ------------------------------
namespace App\Http\Controllers;

use App\Exports\StudentExport;
use App\Imports\StudentImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;



class StudentController extends Controller
{
    protected function export()
    {
        //return (new StudentExport)->download('student.xlsx');
        return (new StudentExport)->download('invoices.csv', \Maatwebsite\Excel\Excel::CSV);

    }
    public function store(Request $request)
    {

        $file = $request->file('file1')->getRealPath();


        Excel::import(new StudentImport,$file);

        return redirect('/im')->with('success', 'All good!');
    }

    public function import()
    {
        return view('import');
    }
}
