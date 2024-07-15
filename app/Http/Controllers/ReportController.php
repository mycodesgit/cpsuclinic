<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patients;
use App\Models\Region;
use App\Models\Province;
use App\Models\City;
use App\Models\Barangay;
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
        
        $hregion = Region::find($patients->home_region);
        $hprovince = Province::where('province_id', $patients->home_province)->first();
        $hcity = City::where('city_id', $patients->home_city)->first();
        $hbarangay = Barangay::find($patients->home_brgy);

        $gregion = Region::find($patients->guardian_region);
        $gprovince = Province::where('province_id', $patients->guardian_province)->first();
        $gcity = City::where('city_id', $patients->guardian_city)->first();
        $gbarangay = Barangay::find($patients->guardian_brgy);
                    
        $pdf = PDF::loadView('patient.pehe_report', compact('patients', 'hregion', 'hprovince', 'hcity', 'hbarangay', 'gregion', 'gprovince', 'gcity', 'gbarangay', 'id'))->setPaper('Legal', 'portrait');
        return $pdf->stream();
    }

    public function reportsRead($id){
        $patients = Patients::all();
        
        return view('reports.list', compact('patients', 'id'));
    }

}
