<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use PDF;

class EmployeeController extends Controller
{
    public function showEmployees(){
      $employee = Employee::all();
      return view('index', compact('employee'));
    }
    
    public function createPDF() {
    $data = Employee::all();
      view()->share('employee',$data);
      $pdf = PDF::loadView('index', $data);
      return $pdf->download('pdf_file.pdf');
    }
}
