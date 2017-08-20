<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('title', 'Car Wash - Home')

{{--@section('sidebar')--}}
{{--@parent--}}

{{--<p>This is appended to the master sidebar.</p>--}}
{{--@endsection--}}

@section('content')
    <h1>Car Wash App: Home</h1>
    <p>Created by <strong>Michael Harper</strong><br>Start by inserting a ficticious license plate below.</p>
    <form action="/lookup" method="POST">
        <div class="form-group">
            {{ csrf_field() }}
            <label for="licensePlate">License Plate</label>
            <input type="text" maxlength="10" class="form-control" id="licensePlate" name="licensePlate" placeholder="e.g. ABC1234">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
@endsection