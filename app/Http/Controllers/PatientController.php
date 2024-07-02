<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

use App\Models\Patients;
use App\Models\College;
use App\Models\Course;
use App\Models\Office;

class PatientController extends Controller
{
    
    public function patientAdd() 
    {
        $col = College::where('campus', '=', Auth::user()->campus)->get();
        $patients = Patients::all();
        $offices = Office::all();
        return view('patient.patient_add', compact('col', 'patients', 'offices'));
    }

    public function patientRead($id) 
    {
        $col = College::where('campus', '=', Auth::user()->campus)->get();
        $patients = Patients::where('category', $id)->get();
        return view('patient.patient_list', compact('col', 'patients', 'id'));
    }

    public function moreInfo($id, $mid){
        $col = College::where('campus', '=', Auth::user()->campus)->get();
        $patients = Patients::find($mid);
        $offices = Office::all();
        return view('patient.patient_moreinfo', compact('col', 'patients', 'offices'));
    }

    public function patientCreate(Request $request){
        if ($request->isMethod('post')) {
            $request->validate([
                'lname' => 'required',
                'fname' => 'required',
                'mname' => 'required',
                'birthdate' => 'required',
                'age' => 'required',
                'sex' => 'required',
                'category' => 'required',
                'home_add' => 'required',
                'contact' => 'required',
                'stud_nation' => 'required',
                'stud_religion' => 'required',
                'c_status' => 'required',
                'studCollege' => 'required',
                'studCourse' => 'required',
                'office' => 'required',
                'guardian' => 'required',
                'guardian_occup' => 'required',
                'guardian_contact' => 'required',
                'guardian_add' => 'required',
            ]);
            
            try {
                Patients::create([
                    'lname' => $request->input('lname'),
                    'fname' => $request->input('fname'),
                    'mname' => $request->input('mname'),
                    'ext_name' => $request->input('ext_name'),
                    'birthdate' => $request->input('birthdate'),
                    'age' => $request->input('age'),
                    'sex' => $request->input('sex'),
                    'category' => $request->input('category'),
                    'home_add' => $request->input('home_add'),
                    'contact' => $request->input('contact'),
                    'stud_nation' => $request->input('stud_nation'),
                    'stud_religion' => $request->input('stud_religion'),
                    'c_status' => $request->input('c_status'),
                    'studCollege' => $request->input('studCollege'),
                    'studCourse' => $request->input('studCourse'),
                    'office' => $request->input('office'),
                    'guardian' => $request->input('guardian'),
                    'guardian_occup' => $request->input('guardian_occup'),
                    'guardian_contact' => $request->input('guardian_contact'),
                    'guardian_add' => $request->input('guardian_add')
                ]);
        
                return redirect()->back()->with('success', 'Added Successfully');
            } catch (\Exception $e) {
                return redirect()->back()->with('error', 'An error occurred: ');
            }
        }
    }    

    public function patientUpdate(Request $request)
    {
        $patient = Patients::findOrFail($request->id);
        $column = $request->column;
        if ($column == 'birthdate') {
            $birthdate = Carbon::parse($request->value);
            $age = $birthdate->age;
            $patient->update([
                $column => $request->value,
                'age' => $age
            ]);
        } else {
            $patient->update([
                $column => $request->value
            ]);
        }

        return response()->json(['success' => true]);
    }

    public function patientHistory(Request $request)
    {
        $patient = Patients::find($request->id);
        $column = $request->column;
        $value = $request->value;
        $array = $request->data_array; 

        $arrayVal = $patient->$column;
        $arrayVal = explode(",", $arrayVal);
        $currentValue = isset($arrayVal[$array]) ? $arrayVal[$array] : null;
        $newvalue = $currentValue === $value ? '' : $value;
        $arrayVal[$array] = $newvalue;
        $newarrayVal = implode(",", $arrayVal);
        $patient->$column = $newarrayVal;
        $patient->save();
        
    
        return response()->json(['success' => true]);
    }
    
    
    public function getCollege(Request $request)
    {
        $selectedCampus = $request->input('campus');

        $college = College::where('campus', $selectedCampus)->get();

        return response()->json(['college' => $college]);
    }

    public function getCourse(Request $request)
    {
        $selectedCollege = $request->input('studCollege');

        $course = Course::where('progCollege', $selectedCollege)->get();

        return response()->json(['course' => $course]);
    }
    
    public function patientDelete($id){
        $patient = Patients::find($id);
        if ($patient) {
            $patient->delete();
    
            return response()->json([
                'status' => 200,
                'uid' => $id,
            ]);
        }
    
        return response()->json([
            'status' => 404,
            'message' => 'Patient not found',
        ]);
    }


}
