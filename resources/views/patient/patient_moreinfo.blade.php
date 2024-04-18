@extends('layout.master_layout')

@section('body')
<div class="container">
    <div class="row">
        <div class="col-md-2">
            <div class="card">
                <div class="card-body">
                    <div class="">
                        <div class="page-header" style="border-bottom: 1px solid #04401f;">
                            <h4>Menu</h4>
                        </div>
                        @include('control.side_menu')
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-10">
            <div class="card">

                <div class="tab-content" id="vert-tabs-right-tabContent"><div class="card-tools mb-2 mt-2 float-right">
                    <ul class="nav nav-pills ml-auto">
                      <li class="nav-item">
                        <a class="nav-link active" href="#page1" data-toggle="tab">Page 1</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#page2" data-toggle="tab">Page 2</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#page3" data-toggle="tab">Page 3</a>
                      </li>
                    </ul>
                </div>
            
                <div class="card-body">

                                <div class="page-header" style="border-bottom: 1px solid #04401f;">
                                    <h4>Personal Information</h4>
                                </div>
                                
                                <div class="tab-content p-0">
                                    <div class="chart tab-pane active" id="page1" style="position: relative; height: 100%;">
                                        <form method="post" action="{{ route('patientUpdate', ['id' => $patients->id]) }}" class="form-horizontal" id="addPatient">
                                            @csrf
                                            <div class="form-group mt-2">
                                                <div class="form-row">
                                                    <div class="col-md-3">
                                                        <label class="badge badge-secondary">Last Name</label><br>
                                                        <input type="text" name="lname" value="{{ ucfirst(strtolower($patients->lname)) }}" class="form-control form-control-sm" placeholder="Enter Last Name">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label class="badge badge-secondary">First Name</label><br>
                                                        <input type="text" name="fname" value="{{ ucfirst(strtolower($patients->fname)) }}" class="form-control form-control-sm" placeholder="Enter First Name">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label class="badge badge-secondary">Middle Name</label><br>
                                                        <input type="text" name="mname" value="{{ ucfirst(strtolower($patients->mname)) }}" class="form-control form-control-sm" placeholder="Enter Middle Name">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label class="badge badge-secondary">Ext. Name</label><br>
                                                        <select class="form-control form-control-sm" name="ext_name">
                                                            <option disabled selected> --Select-- </option>
                                                            <option value="Jr." @if($patients->ext_name == "Jr.") selected @endif>Jr.</option>
                                                            <option value="Sr." @if($patients->ext_name == "Sr.") selected @endif>Sr.</option>
                                                            <option value="III" @if($patients->ext_name == "III") selected @endif>III</option>
                                                            <option value="IV" @if($patients->ext_name == "IV") selected @endif>IV</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
            
                                            <div class="form-group">
                                                <div class="form-row">
                                                    <div class="col-md-3">
                                                        <label class="badge badge-secondary">Category</label><br>
                                                        <select class="form-control form-control-sm" name="category">
                                                            <option disabled selected> --Select-- </option>
                                                            <option value="1" @if($patients->category == "1") selected @endif>Student</option>
                                                            <option value="2" @if($patients->category == "2") selected @endif>Employee</option>
                                                            <option value="3" @if($patients->category == "3") selected @endif>Outside</option>
                                                        </select>
                                                    </div>
            
                                                    <div class="col-md-3">
                                                        <label class="badge badge-secondary">Date of Birth:</label>
                                                        <input type="date" value="{{ $patients->birthdate }}" name="birthdate" class="form-control form-control-sm" id="bday" onchange="calculateAge()">
                                                    </div>
            
                                                    <div class="col-md-3">
                                                        <label class="badge badge-secondary">Age:</label>
                                                        <input type="text" name="age" value="{{ $patients->age }}" class="form-control form-control-sm" id="age" readonly>
                                                    </div>
            
                                                    <div class="col-md-3">
                                                        <label class="badge badge-secondary">Sex</label><br>
                                                        <select class="form-control form-control-sm" name="sex">
                                                            <option disabled selected> --Select-- </option>
                                                            <option value="Male" @if($patients->sex == "Male") selected @endif>Male</option>
                                                            <option value="Female" @if($patients->sex == "Female") selected @endif>Female</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
            
                                            <div class="form-group">
                                                <div class="form-row">
                                                    <div class="col-md-12">
                                                        <label class="badge badge-secondary">Home Address:</label>
                                                        <input type="text" name="home_add" value="{{ ucfirst(strtolower($patients->home_add)) }}" class="form-control form-control-sm" placeholder="Enter Home Address">
                                                    </div>
                                                </div>
                                            </div>
            
                                            <div class="form-group">
                                                <div class="form-row">
                                                    <div class="col-md-3">
                                                        <label class="badge badge-secondary">Contact Number:</label>
                                                        <input type="number" name="contact" value="{{ $patients->contact }}" class="form-control form-control-sm" placeholder="Enter Contact Number">
                                                    </div>
            
                                                    <div class="col-md-3">
                                                        <label class="badge badge-secondary">Nationality:</label>
                                                        <input type="text" name="stud_nation" value="{{ $patients->stud_nation }}" class="form-control form-control-sm" placeholder="Enter Nationality">
                                                    </div>
            
                                                    <div class="col-md-3">
                                                        <label class="badge badge-secondary">Religion</label>
                                                        <select class="form-control form-control-sm" name="stud_religion">
                                                            <option disabled selected> --Select-- </option>
                                                            <option value="Catholic" @if($patients->stud_religion == "Catholic") selected @endif>Catholic</option>
                                                            <option value="Baptist" @if($patients->stud_religion == "Baptist") selected @endif>Baptist</option>
                                                            <option value="Iglesia" @if($patients->stud_religion == "Iglesia") selected @endif>Iglesia ni Cristo</option>
                                                            <option value="Islam" @if($patients->stud_religion == "Islam") selected @endif>Islam</option>
                                                            <option value="Other" @if($patients->stud_religion == "Other") selected @endif>Other</option>
                                                        </select>
                                                    </div>
            
                                                    <div class="col-md-3">
                                                        <label class="badge badge-secondary">Civil Status</label>
                                                        <select class="form-control form-control-sm" name="c_status">
                                                            <option disabled selected> --Select-- </option>
                                                            <option value="Single" @if($patients->c_status == "Single") selected @endif>Single</option>
                                                            <option value="Married" @if($patients->c_status == "Married") selected @endif>Married</option>
                                                            <option value="Divorced" @if($patients->c_status == "Divorced") selected @endif>Divorced</option>
                                                            <option value="Widowed" @if($patients->c_status == "Widowed") selected @endif>Widowed</option>
                                                            <option value="Separated" @if($patients->c_status == "Separated") selected @endif>Separated</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
            
                                            <div class="form-group">
                                                <div class="form-row">
                                                    <div class="col-md-6">
                                                        <label class="badge badge-secondary">College/Department</label>
                                                        <select class="form-control form-control-sm" name="studCollege" id="collegeSelect">
                                                            <option disabled selected> --Select-- </option>
                                                            @foreach($col as $college)
                                                                <option value="{{ $college->college_abbr }}" @if($college->college_abbr == $patients->studCollege) selected @endif>{{ $college->college_name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
            
                                                    <div class="col-md-6">
                                                        <label class="badge badge-secondary">Course/Year</label>
                                                        <select class="form-control form-control-sm" name="studCourse" id="courseSelect">
                                                            <option>{{ $patients->studCourse }}</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
            
                                            <div class="form-group">
                                                <div class="form-row">
                                                    <div class="col-md-6">
                                                        <label class="badge badge-secondary">Name of Parents/Guardian</label>
                                                        <input type="text" name="guardian" value="{{ $patients->guardian }}" class="form-control form-control-sm" placeholder="Enter Parents Name / Guardian">
                                                    </div>
            
                                                    <div class="col-md-3">
                                                        <label class="badge badge-secondary">Occupation</label>
                                                        <input type="text" name="guardian_occup" value="{{ $patients->guardian_occup }}" class="form-control form-control-sm" placeholder="Enter Occupation">
                                                    </div>
            
                                                    <div class="col-md-3">
                                                        <label class="badge badge-secondary">Contact Number:</label>
                                                        <input type="number" name="guardian_contact" value="{{ $patients->guardian_contact }}" class="form-control form-control-sm" placeholder="Enter Contact Number">
                                                    </div>
                                                </div>
                                            </div>
            
                                            <div class="form-group">
                                                <div class="form-row">
                                                    <div class="col-md-12">
                                                        <label class="badge badge-secondary">Address:</label>
                                                        <input type="text" name="guardian_add" value="{{ $patients->guardian_add }}" class="form-control form-control-sm" placeholder="Enter Parents/Guardian Address">
                                                    </div>
                                                </div>
                                            </div> 
                                            
                                            <div class="form-group">
                                                <div class="form-row">
                                                    <div class="col-md-12">
                                                        <button type="reset" class="btn btn-danger btn-sm" data-dismiss="modal">
                                                            Reset
                                                        </button>
                                                        <button type="submit" class="btn btn-success btn-sm btn-save">
                                                            <i class="fas fa-save"></i> Save
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>   
                                        </form>
                                     </div>
                                    <div class="chart tab-pane" id="page2" style="position: relative; height: 300px;">
                                      sd
                                    </div>
                                    <div class="chart tab-pane" id="page3" style="position: relative; height: 300px;">
                                      
                                    </div>
                                </div>
                        <div class="tab-pane fade" id="vert-tabs-right-two" role="tabpanel" aria-labelledby="vert-tabs-right-two-tab">
                            <div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection