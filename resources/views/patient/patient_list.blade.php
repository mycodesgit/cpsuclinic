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
                <div class="card-body">
                    <div>
                        <table id="example1" class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Age</th>
                                    <th>Sex</th>
                                    <th>Civil Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($patients as $p)
                                    <tr>
                                        <td>{{ $p->lname }} {{ $p->ext }} {{ $p->fname }} {{ $p->mname }}</td>
                                        <td>{{ $p->age }}</td>
                                        <td>{{ $p->sex }}</td>
                                        <td>{{ $p->c_status}}</td>
                                        <td>
                                            <a href="{{ route('moreInfo', ['id' => $p->category, 'mid' => $p->id]) }}" class="btn btn-info btn-sm" title="More Info">
                                                <i class="fas fa-exclamation-circle"></i> 
                                            </a>
                                            <a href="{{ route('peheReport', $p->id) }}" target="_blank" class="btn btn-warning btn-sm" title="Pre-Entrance Health Examination Reporto">
                                                <i class="fas fa-file-pdf"></i> 
                                            </a>
                                            <button class="btn btn-danger btn-sm" title="Delete">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection