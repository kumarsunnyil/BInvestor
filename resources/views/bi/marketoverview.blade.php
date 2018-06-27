@extends('layouts.master')

@section('title')
    Market Stock Overview
@endsection

@section('content')
    <div class="row">
        <h3>Market Stock Overview</h3>
    </div>
    <div class="row">
        <div class="alert alert-info">

            <p >
                To get this page working,
                need to query the company table and fetch each corresponding company from the company_stocks table and display in a foreach statement in the html code below.
                the basic stub has been provided, but there is a lot more work to be done on the HTML, stropping here as the time ran out too quickly
            </p>

        </div>

    {{--@foreach($companies as $company)--}}


            <div class="row">
                <div class="col-4">.col-4</div>
                <div class="col-4">.col-4</div>
                <div class="col-4">.col-4</div>
            </div>
    {{--@endforeach--}}
    </div>
@endsection