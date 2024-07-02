<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>CPSU || Clinic</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('style/plugins/fontawesome-free-v6/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('style/dist/css/adminlte.css') }}">
    <link rel="stylesheet" href="{{ asset('style/dist/css/custom.css') }}">
    <!-- Toastr -->
    <link rel="stylesheet" href="{{ asset('style/plugins/toastr/toastr.min.css') }}">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="{{ asset('style/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
    <!-- fullCalendar -->
    <link rel="stylesheet" href="{{ asset('style/plugins/fullcalendar1/fullcalendar.css') }}">
    <!-- DataTable -->
    <link rel="stylesheet" href="{{ asset('style/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">

    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('style/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
        

    <!-- Logo  -->
    <link rel="shortcut icon" type="" href="{{ asset('style/dist/img/CPSU_L.png') }}">

    <style type="text/css">

    </style>
</head>

<body class="hold-transition layout-top-nav layout-navbar-fixed text-sm">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand-md navbar-light bg-greenn">
            <div class="container">
                <a href="" class="">
                    <img src="{{ asset('style/dist/img/MDHULogo.png') }}" alt="AdminLTE Logo" class="brand-image">
                    <span class="brand-text font-weight-light"></span>
                </a>

                <div class="collapse navbar-collapse order-3" id="navbarCollapse"></div>

                <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}" role="button" style="color: #fff !important">
                            <i class="fas fa-sign-out"></i> Sign Out
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <nav class="main-header navbar navbar-expand-md navbar-light bottom-border-0" style="margin-top: 45px;">
            <div class="container">
                <a href="#" class=""></a>
                <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                    @include('control.control_topmenu')
                </div>
            </div>
        </nav>

        <div class="content-wrapper" style="padding-top: 40px">
            <div class="content-header">
                <div class="container">
                    <div class="row mb-2">
                        
                    </div>
                </div>
            </div>

            <div class="content">
                @yield('body')
            </div>
        </div>

        <aside class="control-sidebar control-sidebar-dark">
        </aside>

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                CPSU Clinic Management System
            </div>
            <!-- Default to the left -->
            <strong>Maintain and Manage by <a href="#">MIS</a>.</strong> All rights reserved.
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{{ asset('style/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('style/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('style/dist/js/adminlte.min.js') }}"></script>
    <!-- jquery-validation -->
    <script src="{{ asset('style/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('style/plugins/jquery-validation/additional-methods.min.js') }}"></script>
    <!-- Toastr -->
    <script src="{{ asset('style/plugins/toastr/toastr.min.js') }}"></script>
    <!-- SweetAlert2 -->
    <script src="{{ asset('style/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
    <!-- fullCalendar 2.2.5 -->
    <script src="{{ asset('style/plugins/moment1/moment.min.js') }}"></script>
    <script src="{{ asset('style/plugins/fullcalendar1/fullcalendar.js') }}"></script>
    <script src="{{ asset('js/event/calendar.js') }}"></script>
    <!-- DataTables  & Plugins -->
    <script src="{{ asset('style/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('style/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('style/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('style/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('style/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('style/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script> 
    <script src="{{ asset('style/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('style/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('style/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('style/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('style/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('style/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

    <script src="{{ asset('js/basic/table.js') }}"></script>

    <!-- ChartJS -->
    <script src="style/plugins/chart.js/Chart.min.js"></script>

    <script src="{{ asset('js/validation/patientValidation.js') }}"></script>

    <!-- Select2 -->
    <script src="{{ asset('style/plugins/select2/js/select2.full.min.js') }}"></script>
    <script>
        $(function () {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
            theme: 'bootstrap4'
            })
        });
    </script>
    <script>
        @if(Session::has('success'))
            toastr.options = {
                "closeButton":true,
                "progressBar":true,
                'positionClass': 'toast-bottom-right'
            }
            toastr.success("{{ session('success') }}")
        @endif
    </script>


    <script>
        @if(Session::has('error'))
            toastr.options = {
                "closeButton":true,
                "progressBar":true,
                'positionClass': 'toast-bottom-right'
            }
            toastr.success("{{ session('success') }}")
        @endif
        @if(Session::has('error1'))
            toastr.options = {
                "closeButton":true,
                "progressBar":true,
                'positionClass': 'toast-bottom-center'
            }
            toastr.error("{{ session('error1') }}")
        @endif
    </script>

    <script>
        function calculateAge() {
            var birthday = document.getElementById('bday').value;
            var today = new Date();
            var birthDate = new Date(birthday);
            var age = today.getFullYear() - birthDate.getFullYear();

            if (today.getMonth() < birthDate.getMonth() || (today.getMonth() === birthDate.getMonth() && today.getDate() < birthDate.getDate())) {
                age--;
            }
            document.getElementById('age').value = age;
        }
    </script>
    <script>
        $(document).ready(function() {
            $('.update-field').on('change', function() {
                var elementType = $(this).prop('tagName').toLowerCase();
                if (elementType === 'input' || elementType === 'textarea') {
                    columnid = $(this).data('column-id');
                    columnname = $(this).data('column-name');
                } else if (elementType === 'select') {
                    columnid = $(this).find('option:selected').data('column-id');
                    columnname = $(this).find('option:selected').data('column-name');
                }

                var value = $(this).val();

                $.ajax({
                    url: '{{ route("patientUpdate") }}',
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: columnid,
                        column: columnname,
                        value: value
                    },
                    success: function(response) {
                        
                    },
                    error: function(xhr, status, error) {
                        if (xhr.status === 422) {
                            var errors = xhr.responseJSON.errors;
                            console.error('Validation errors:', errors);
                        } else {
                            console.error('Error:', error);
                        }
                    }
                });
            });
        });

        $(document).ready(function() {
            $('.update-field1').on('change', function() {
            var columnId = $(this).data('column-id');
            var columnName = $(this).data('column-name');
            var value = $(this).val();
            var dataArray = $(this).data('array'); // Add this line

            $.ajax({
                url: "{{ route('patientHistory') }}",
                type: 'POST',
                data: {
                    _token: "{{ csrf_token() }}",
                    id: columnId,
                    column: columnName,
                    value: value,
                    data_array: dataArray // Add this line
                },
                success: function(response) {
                    
                }
            });
        });
    });
    </script>
    <script>
        $(document).ready(function() {
            $('#patient-select').change(function() {
                var selectedId = $(this).val();
                if (selectedId) {
                    var url = '{{ route("reportsRead", ":id") }}';
                    url = url.replace(':id', selectedId);
                    window.location.href = url;
                }
            });
        });
    </script>

    <script>
        function updateCoursePreferences(studCollege) {
        $.ajax({
                url: '{{ route("getCourse") }}?studCollege=' + studCollege,
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

    </script>
    @if(Route::currentRouteName() == 'dash')
    <script>
        $(function () {
            var donutChartCanvas = $('#donutChartPatient').get(0).getContext('2d')
            var donutData        = {
            labels: [
                'Student',
                'Employee',
                'Guest',
            ],
            datasets: [
                {
                data: [{{ count($pstudent) }},{{ count($pemployee) }},{{ count($pguest) }}],
                backgroundColor : ['#00a65a', '#00c0ef', '#3c8dbc'],
                }
            ]
            }
            var donutOptions     = {
            maintainAspectRatio : false,
            responsive : true,
            }

            var donutChartCanvas1 = $('#donutChartRemarks').get(0).getContext('2d')
            var donutData1        = {
            labels: [
                'Fit for enrollment',
                'Not fit for enrollment',
                'Pending',
            ],
            datasets: [
                {
                data: [{{ count($remarks1) }},{{ count($remarks2) }},{{ count($remarks3) }}],
                backgroundColor : ['#00a65a', '#00c0ef', '#3c8dbc'],
                }
            ]
            }
            var donutOptions1     = {
            maintainAspectRatio : false,
            responsive : true,
            }

            new Chart(donutChartCanvas, {
                type: 'doughnut',
                data: donutData,
                options: donutOptions
            })

            new Chart(donutChartCanvas1, {
                type: 'doughnut',
                data: donutData1,
                options: donutOptions1
            })
        });
    </script>
    @endif
    <script>
        $(document).ready(function() {
            $('.user-delete').on('click', function() {
                var patientId = $(this).data('id');
                var row = $('#tr-' + patientId);

                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        var url = '{{ route("userDelete", ":id") }}'.replace(':id', patientId);

                        $.ajax({
                            url: url,
                            type: 'GET',
                            success: function(response) {
                                console.log("Server response:", response);
                                if(response.status == 200) {
                                    row.fadeOut(500, function() {
                                        $(this).remove();
                                    });
                                    Swal.fire({
                                        title: 'Deleted!',
                                        text: 'The record has been deleted.',
                                        icon: 'success',
                                        timer: 2000,
                                        showConfirmButton: false
                                    });
                                } else {
                                    Swal.fire(
                                        'Failed!',
                                        'Failed to delete the record.',
                                        'error'
                                    );
                                }
                            },
                            error: function(xhr, status, error) {
                                console.error("AJAX error:", status, error);
                                Swal.fire(
                                    'Error!',
                                    'An error occurred while deleting the record.',
                                    'error'
                                );
                            }
                        });
                    }
                });
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.patient-delete').on('click', function() {
                var patientId = $(this).data('id');
                var row = $('#tr-' + patientId);

                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        var url = '{{ route("patientDelete", ":id") }}'.replace(':id', patientId);

                        $.ajax({
                            url: url,
                            type: 'GET',
                            success: function(response) {
                                console.log("Server response:", response);
                                if(response.status == 200) {
                                    row.fadeOut(500, function() {
                                        $(this).remove();
                                    });
                                    Swal.fire({
                                        title: 'Deleted!',
                                        text: 'The record has been deleted.',
                                        icon: 'success',
                                        timer: 2000,
                                        showConfirmButton: false
                                    });
                                } else {
                                    Swal.fire(
                                        'Failed!',
                                        'Failed to delete the record.',
                                        'error'
                                    );
                                }
                            },
                            error: function(xhr, status, error) {
                                console.error("AJAX error:", status, error);
                                Swal.fire(
                                    'Error!',
                                    'An error occurred while deleting the record.',
                                    'error'
                                );
                            }
                        });
                    }
                });
            });
        });
    </script>
</body>
</html>
