<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

use App\Models\Patients;
use App\Models\College;
use App\Models\Course;
use PDF;

class PatientController extends Controller
{
    
    public function patientAdd() 
    {
        $col = College::where('campus', '=', Auth::user()->campus)->get();
        $patients = Patients::all();
        return view('patient.patient_add', compact('col', 'patients'));
    }

    public function patientRead($id) 
    {
        $col = College::where('campus', '=', Auth::user()->campus)->get();
        $patients = Patients::where('category', $id)->get();
        return view('patient.patient_list', compact('col', 'patients', 'id'));
    }

    public function moreInfo($id){
        $col = College::where('campus', '=', Auth::user()->campus)->get();
        $patients = Patients::find($id);
        return view('patient.patient_moreinfo', compact('col', 'patients'));
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

    public function patientUpdate(Request $request, $id){
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
            'guardian' => 'required',
            'guardian_occup' => 'required',
            'guardian_contact' => 'required',
            'guardian_add' => 'required',
        ]);

        try {
            Patients::where('id', $id)->update([
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
                'guardian' => $request->input('guardian'),
                'guardian_occup' => $request->input('guardian_occup'),
                'guardian_contact' => $request->input('guardian_contact'),
                'guardian_add' => $request->input('guardian_add')
            ]);

            return redirect()->back()->with('success', 'Updated Successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred: ');
        }
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

    public function peheReport()
    {
        $pdf = PDF::loadView('patient.pehe_report')->setPaper('Legal', 'portrait');
        return $pdf->stream();
    }


}
