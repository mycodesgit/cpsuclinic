$(function () {
    $('#addPatient').validate({
        rules: {
            fname: {
                required: true
            },
            mname: {
                required: true
            },
            lname: {
                required: true
            },
            birthdate: {
                required: true
            },
            age: {
                required: true
            },
            sex: {
                required: true
            },
            home_add: {
                required: true
            },
            contact: {
                required: true
            },
            stud_nation: {
                required: true
            },
            stud_religion: {
                required: true
            },
            c_status: {
                required: true
            },
            studCollege: {
                required: true
            },
            studCourse: {
                required: true
            },
            guardian: {
                required: true
            },
            guardian_occup: {
                required: true
            },
            guardian_contact: {
                required: true
            },
            guardian_add: {
                required: true
            }
        },
        messages: {
            fname: {
                required: "Please enter a First Name"
            },
            mname: {
                required: "Please enter a Middle Name"
            },
            lname: {
                required: "Please enter a Last Name"
            },
            birthdate: {
                required: "Please enter a Birthdate"
            },
            age: {
                required: "Please enter an Age"
            },
            sex: {
                required: "Please select a Gender"
            },
            home_add: {
                required: "Please enter a Home Address"
            },
            contact: {
                required: "Please enter a Contact Number"
            },
            stud_nation: {
                required: "Please enter a Nationality"
            },
            stud_religion: {
                required: "Please enter a Religion"
            },
            c_status: {
                required: "Please select a Civil Status"
            },
            studCollege: {
                required: "Please select a College"
            },
            studCourse: {
                required: "Please select a Course"
            },
            guardian: {
                required: "Please enter a Guardian Name"
            },
            guardian_occup: {
                required: "Please enter a Guardian Occupation"
            },
            guardian_contact: {
                required: "Please enter a Guardian Contact Number"
            },
            guardian_add: {
                required: "Please enter a Guardian Address"
            }
            
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.col-md-12, .col-md-6, .col-md-4, .col-md-3').append(error);        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        },
    });
});