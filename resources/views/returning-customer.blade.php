<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('title', 'Car Wash - Returnimg Customer')

{{--@section('sidebar')--}}
{{--@parent--}}

{{--<p>This is appended to the master sidebar.</p>--}}
{{--@endsection--}}

@section('content')
    <h1>Car Wash App: Returning Customer</h1>
    <p>Welcome back valued customer!<br>Previous Car Washes: <?= $previousCompletedVisits; ?>    </p>
    <p>Discount Multiplier: <?= $discountMultiplier; ?>    </p>

    @if($discountMultiplier == 0.5)
        <p>SECOND CAR WASH!!! You get 50% off your car wash today!</p>
    @endif

    <form action="/lookup" method="POST">
        <div class="form-group">
            {{ csrf_field() }}
            <label for="licensePlate">License Plate</label>
            <input type="text" class="form-control" id="licensePlate" name="licensePlate" placeholder="e.g. ABC1234">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
@endsection