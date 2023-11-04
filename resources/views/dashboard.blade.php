@extends('layouts.app')

	@section('title')
	    {{ __('Dashboard') }}
	@endsection

	@section('main')
    <br>
    <br>
        <div class="breadcome-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcome-list single-page-breadcome">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="breadcome-heading">
                                        
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <ul class="breadcome-menu">
                                        <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                        </li>
                                        <li><span class="bread-blod">Dashboard</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<div class="widgets-programs-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="hpanel widget-int-shape responsive-mg-b-30">
                        <div class="panel-body">
                            <div class="stats-title pull-left">
                                <h4>Total Company</h4>
                            </div>
                            <div class="stats-icon pull-right">
                                <i class="educate-icon educate-apps"></i>
                            </div>
                            <div class="m-t-xl widget-cl-1">
                                <h1 class="text-success">{{ App\Models\Company::count('id') }}</h1>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="hpanel widget-int-shape responsive-mg-b-30">
                        <div class="panel-body">
                            <div class="stats-title pull-left">
                                <h4>Total Employees</h4>
                            </div>
                            <div class="stats-icon pull-right">
                                <i class="educate-icon educate-professor"></i>
                            </div>
                            <div class="m-t-xl widget-cl-2">
                                <h1 class="text-info">{{ App\Models\Employee::count('id') }}</h1>
                                
                            </div>
                        </div>
                    </div>
                </div>
                
                
            </div>
            
        </div>
    </div>
    <br>

	@endsection