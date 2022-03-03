<?php

namespace App\Exports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;

class StudentExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    use Exportable;
    public function collection()
    {
        return Student::all();
    }
}
