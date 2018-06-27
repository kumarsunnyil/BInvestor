@extends('layouts.master')

@section('title')
    Company Stock Overview
@endsection

@section('content')
    <div class="row">
        <h3>Company Stock Overview</h3>
    </div>
    <div class="alert alert-info">
        <p>The data is already coming on to this page need to  style and align as per the requirement</p>
    </div>
    <div class="row">

    @foreach($companies as $company)



        <div class="col-lg-3 col-sm-3 classWithPad" >
            <h2>{{ $company->name }}</h2>
            <p>Preferred Stock</p>
            <div class="row col-12 ov-stock-list">
                <div class="col-10">New York stock exchange</div> <div class="col-2 pull-right">12.69</div>
            </div>
            <div class="row col-12 ov-stock-list">
                <div class="col-10">New York stock exchange</div> <div class="col-2 pull-right">12.69</div>
            </div>
            <div class="row col-12 ov-stock-list">
                <div class="col-10">New York stock exchange</div> <div class="col-2 pull-right">12.69</div>
            </div>
            <div class="row col-12 ov-stock-list">
                <div class="col-10">New York stock exchange</div> <div class="col-2 pull-right">12.69</div>
            </div>
        </div><!-- /.col-lg-4 -->

    @endforeach
    </div>
@endsection