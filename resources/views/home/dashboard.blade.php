@extends('layout.master_layout')

@section('body')
<div class="container">
    <div class="row">
        <div class="col-lg-3 col-6">
            <div class="small-box bg-info d-flex align-items-center justify-content-between pl-3 pr-3 pb-3 pt-3 card-curve" style="background-color: #00bc8c !important">
                <div class="text-left">
                    <div class="inner">
                        <h3>150</h3>
                        <p>Patient Today</p>
                    </div>
                </div>
                <div class="text-right">
                    <div class="icon">
                        <img src="{{ asset('style/dist/img/icon-1.svg') }}" width="70px" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-info d-flex align-items-center justify-content-between pl-3 pr-3 pb-3 pt-3 card-curve" style="background-color:#89c9b6 !important; color: #ffffff !important">
                <div class="text-left">
                    <div class="inner">
                        <h3>150</h3>
                        <p>New Orders</p>
                    </div>
                </div>
                <div class="text-right">
                    <div class="icon">
                        <img src="{{ asset('style/dist/img/icon-4.svg') }}" width="70px" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-info d-flex align-items-center justify-content-between pl-3 pr-3 pb-3 pt-3 card-curve" style="background-color:#9dcda8 !important; color: #ffffff !important;">
                <div class="text-left">
                    <div class="inner">
                        <h3>150</h3>
                        <p>New Orders</p>
                    </div>
                </div>
                <div class="text-right">
                    <div class="icon">
                        <img src="{{ asset('style/dist/img/icon-3.png') }}" width="70px" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-info d-flex align-items-center justify-content-between pl-3 pr-3 pb-3 pt-3 card-curve" style="background-color: #d5d5d5 !important; color: #05825f !important;">
                <div class="text-left">
                    <div class="inner">
                        <h3>150</h3>
                        <p>Nurse & Staff</p>
                    </div>
                </div>
                <div class="text-right">
                    <div class="icon">
                        <img src="{{ asset('style/dist/img/icon-2.svg') }}" width="70px" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-8"></div>
        <div class="col-md-4">
        </div>
    </div>
</div>

@endsection