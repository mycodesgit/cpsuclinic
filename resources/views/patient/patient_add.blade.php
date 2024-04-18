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
                        <div class="mt-3" style="font-size: 13pt;">
                            @include('control.side_menu')
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <form method="post" action="{{ route('patientCreate') }}" class="form-horizontal" id="addPatient">
                        @csrf

                        <div class="page-header" style="border-bottom: 1px solid #04401f;">
                            <h4>Personal Information</h4>
                        </div>

                        <div class="form-group mt-2">
                            <div class="form-row">
                                <div class="col-md-3">
                                    <label class="badge badge-secondary">Last Name</label><br>
                                    <input type="text" name="lname" oninput="var words = this.value.split(' '); for(var i = 0; i < words.length; i++){ words[i] = words[i].substr(0,1).toUpperCase() + words[i].substr(1); } this.value = words.join(' ');" class="form-control form-control-sm" placeholder="Enter Last Name">
                                </div>
                                <div class="col-md-3">
                                    <label class="badge badge-secondary">First Name</label><br>
                                    <input type="text" name="fname" oninput="var words = this.value.split(' '); for(var i = 0; i < words.length; i++){ words[i] = words[i].substr(0,1).toUpperCase() + words[i].substr(1); } this.value = words.join(' ');" class="form-control form-control-sm" placeholder="Enter First Name">
                                </div>
                                <div class="col-md-3">
                                    <label class="badge badge-secondary">Middle Name</label><br>
                                    <input type="text" name="mname" oninput="var words = this.value.split(' '); for(var i = 0; i < words.length; i++){ words[i] = words[i].substr(0,1).toUpperCase() + words[i].substr(1); } this.value = words.join(' ');" class="form-control form-control-sm" placeholder="Enter Middle Name">
                                </div>
                                <div class="col-md-3">
                                    <label class="badge badge-secondary">Ext. Name</label><br>
                                    <select class="form-control form-control-sm" name="ext_name">
                                        <option disabled selected> --Select-- </option>
                                        <option value="Jr.">Jr.</option>
                                        <option value="Sr.">Sr.</option>
                                        <option value="III">III</option>
                                        <option value="IV">IV</option>
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
                                        <option value="1">Student</option>
                                        <option value="2">Employee</option>
                                        <option value="3">Outside</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label class="badge badge-secondary">Date of Birth:</label>
                                    <input type="date" name="birthdate" class="form-control form-control-sm" id="bday" onchange="calculateAge()">
                                </div>

                                <div class="col-md-3">
                                    <label class="badge badge-secondary">Age:</label>
                                    <input type="text" name="age" class="form-control form-control-sm" id="age" readonly>
                                </div>

                                <div class="col-md-3">
                                    <label class="badge badge-secondary">Sex</label><br>
                                    <select class="form-control form-control-sm" name="sex">
                                        <option disabled selected> --Select-- </option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-12">
                                    <label class="badge badge-secondary">Home Address:</label>
                                    <input type="text" name="home_add" oninput="var words = this.value.split(' '); for(var i = 0; i < words.length; i++){ words[i] = words[i].substr(0,1).toUpperCase() + words[i].substr(1); } this.value = words.join(' ');" class="form-control form-control-sm" placeholder="Enter Home Address">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-3">
                                    <label class="badge badge-secondary">Contact Number:</label>
                                    <input type="number" name="contact" class="form-control form-control-sm" placeholder="Enter Contact Number">
                                </div>

                                <div class="col-md-3">
                                    <label class="badge badge-secondary">Nationality:</label>
                                    <input type="text" name="stud_nation" class="form-control form-control-sm" placeholder="Enter Nationality">
                                </div>

                                <div class="col-md-3">
                                    <label class="badge badge-secondary">Religion</label>
                                    <select class="form-control form-control-sm" name="stud_religion">
                                        <option disabled selected> --Select-- </option>
                                        <option value="Catholic">Catholic</option>
                                        <option value="Baptist">Baptist</option>
                                        <option value="Iglesia">Iglesia ni Cristo</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>

                                <div class="col-md-3">
                                    <label class="badge badge-secondary">Civil Status</label>
                                    <select class="form-control form-control-sm" name="c_status">
                                        <option disabled selected> --Select-- </option>
                                        <option value="Single">Single</option>
                                        <option value="Married">Married</option>
                                        <option value="Divorced">Divorced</option>
                                        <option value="Widowed">Widowed</option>
                                        <option value="Separated">Separated</option>
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
                                            <option value="{{ $college->college_abbr }}">{{ $college->college_name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label class="badge badge-secondary">Course/Year</label>
                                    <select class="form-control form-control-sm" name="studCourse" id="courseSelect">
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <label class="badge badge-secondary">Name of Parents/Guardian</label>
                                    <input type="text" name="guardian" oninput="var words = this.value.split(' '); for(var i = 0; i < words.length; i++){ words[i] = words[i].substr(0,1).toUpperCase() + words[i].substr(1); } this.value = words.join(' ');" class="form-control form-control-sm" placeholder="Enter Parents Name / Guardian">
                                </div>

                                <div class="col-md-3">
                                    <label class="badge badge-secondary">Occupation</label>
                                    <input type="text" name="guardian_occup" oninput="var words = this.value.split(' '); for(var i = 0; i < words.length; i++){ words[i] = words[i].substr(0,1).toUpperCase() + words[i].substr(1); } this.value = words.join(' ');" class="form-control form-control-sm" placeholder="Enter Occupation">
                                </div>

                                <div class="col-md-3">
                                    <label class="badge badge-secondary">Contact Number:</label>
                                    <input type="number" name="guardian_contact" class="form-control form-control-sm" placeholder="Enter Contact Number">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-12">
                                    <label class="badge badge-secondary">Address:</label>
                                    <input type="text" name="guardian_add" oninput="var words = this.value.split(' '); for(var i = 0; i < words.length; i++){ words[i] = words[i].substr(0,1).toUpperCase() + words[i].substr(1); } this.value = words.join(' ');" class="form-control form-control-sm" placeholder="Enter Parents/Guardian Address">
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
            </div>
        </div>
    </div>
</div>

@endsection