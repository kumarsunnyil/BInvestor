@extends('layouts.master')

@section('content')
    <div class="row">

        <div class="col-md-4 col-md-offset-4">
            <h1>Add Your Company</h1>

            @if(session()->has('message.level'))
                <div class="alert alert-{{ session('message.level') }}">
                    {!! session('message.content') !!}
                </div>
            @endif




            @if(count($errors)>0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p> {{ $error }}</p>
                    @endforeach
                </div>
            @endif
            <form action="" method="post">
                <div class="form-group">
                    <label for="company">Company</label>
                    <input type="text" id="company_name" name="company_name" class="form-control"
                           placeholder="Company Name" required>
                    <label for="price">Price</label>
                    <input type="text" id="price" name="price" class="form-control"
                           placeholder="Price" required>
                    <label for="city">City</label>
                    <input type="text" id="city" name="city" class="form-control"
                           placeholder="City" required>


                    <div class="col-md-8 mb-3">
                        <label for="state">Stock Type</label>
                        <select class="custom-select d-block w-300" id="stocktype" name="stocktype" required>
                            <option value="Common_Stock">Common Stock</option>
                            <option value="preferred_stock">Preferred Stock</option>
                        </select>
                        <div class="invalid-feedback">
                            Please provide a valid state.
                        </div>
                    </div>

                </div>
                <button type="submit" class="btn btn-primary">Add To The List</button>
                {{ csrf_field() }}
            </form>
        </div>
    </div>
@endsection