@extends('layouts.master')

@section('title')
    Company List Overview
    <hr>
@endsection

@section('content')
    <div class="row">
        <h3>Company List</h3>
    </div>

    @foreach($companies as $company)
        <div class="row">
            <div>
                <p>{{ $company->name }} </p>
                <p>{{ ($company->stock_id == 1 )? 'Preferred Stock':  'Common Stock'}} </p>
                <p class="exchange-text">{{ ($company->stock_id == 1 )? 'Hong Kong Stock exchange':  'New York Stock exchange'}}  </p>
                <hr>
            </div>
        </div>
    @endforeach
    <div class="row">
        <a href="{{ route('company/add-to-listing') }}" type="button" class="btn btn-success"> Add Company</a>
    </div>

@endsection