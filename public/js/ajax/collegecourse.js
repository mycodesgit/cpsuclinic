// function updateCollegePreferences(campus) {
//     $.ajax({
//         url: collegeRoute + '?campus=' + campus,
//         type: 'GET',
//         success: function(data) {
//             updateOptions('studCollege', data.college);
//         },
//         error: function() {
//             console.error('Error fetching college');
//         }
//     });
// }

// function updateOptions(selectName, options) {
//     const select = $('select[name=' + selectName + ']');
//     select.empty();
//     select.append('<option value="">Select College</option>');
//     $.each(options, function(key, value) {
//         select.append('<option value="' + value.college_abbr + '">' + value.college_name + '</option>');
//     });
// }

// $('#campus').change(function() {
//     const selectedCampus = $(this).val();
//     updateCollegePreferences(selectedCampus);
// });


function updateCoursePreferences(studCollege) {
    $.ajax({
        url: courseRoute + '?studCollege=' + studCollege,
        type: 'GET',
        success: function(data) {
            updateCourseOptions('studCourse', data.course);
        },
        error: function() {
            console.error('Error fetching course');
        }
    });
}

function updateCourseOptions(selectName, options) {
    const select = $('select[name=' + selectName + ']');
    select.empty();
    select.append('<option value="">Select Course</option>');
    $.each(options, function(key, value) {
        select.append('<option value="' + value.progAcronym + '">' + value.progAcronym + '</option>');
    });
}

$('#collegeSelect').change(function() {
    const selectedCollege = $(this).val();
    updateCoursePreferences(selectedCollege);
});
