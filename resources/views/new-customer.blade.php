<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('title', 'Car Wash App - New Customer!')

{{--@section('sidebar')--}}
{{--@parent--}}

{{--<p>This is appended to the master sidebar.</p>--}}
{{--@endsection--}}

@section('content')
    <h1>Car Wash App: New Customer!</h1>
    <p>Greetings new customer!<br> Please select car or truck below:</p>
    <form action="/lookup" method="POST">
        <div class="form-group">
            {{ csrf_field() }}
            <label for="licensePlate">License Plate</label>
            <input type="text" class="form-control" id="licensePlate" name="licensePlate" placeholder="e.g. ABC1234">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
@endsection