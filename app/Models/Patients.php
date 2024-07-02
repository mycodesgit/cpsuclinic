<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patients extends Model
{
    use HasFactory;

    protected $fillable = [
        'lname',
        'fname',
        'mname',
        'ext_name',
        'birthdate',
        'age',
        'sex',
        'category',
        'home_add',
        'contact',
        'stud_nation',
        'stud_religion',
        'c_status',
        'studCollege',
        'studCourse',
        'office',
        'guardian',
        'guardian_occup',
        'guardian_contact',
        'guardian_add',
        'height',
        'weight',
        'bmi',
        'temp',
        'pr',
        'bp',
        'rr',
        'disease',
        'disease_rem',
        'hospital_confine',
        'date_hospitaliz',
        'immunization1',
        'immunization2',
        'smoking',
        'drinking',
        'Menarche',
        'Duration',
        'Interval',
        'pads_use',
        'mens_symp',
        'lmp',
        'en_pexam',
        'findings_pexam',
        'other_pexam',
        'other_find',
        'pexam_pwd',
        'pexam_remarks',
        'pend_reason',
    ];    
}
