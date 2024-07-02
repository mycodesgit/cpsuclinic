<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patients;
use PDF;

class ReportController extends Controller
{
    public function reportsSrch(){
        $patients = Patients::all();

        return view('reports.list', compact('patients'));
    }
        
    public function peheReport($id)
    {
        $patients = Patients::join('college', 'patients.studCollege', '=', 'college.college_abbr')
                    ->where('patients.id', $id)
                    ->first();
                    
        $pdf = PDF::loadView('patient.pehe_report', compact('patients', 'id'))->setPaper('Legal', 'portrait');
        return $pdf->stream();
    }

    public function reportsRead($id){
        $patients = Patients::all();
        
        return view('reports.list', compact('patients', 'id'));
    }

}
