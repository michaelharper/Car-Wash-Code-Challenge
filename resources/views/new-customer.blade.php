<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('title', 'Car Wash App - New Customer!')

{{--@section('sidebar')--}}
{{--@parent--}}

{{--<p>This is appended to the master sidebar.</p>--}}
{{--@endsection--}}

@section('content')
    <h1>Car Wash App: New Customer!</h1>
    <p>Greetings new customer!<br></p>
    <form action="/review" method="POST">
        <div class="form-group">
            <label for="vehicleChoice">Please select car or truck below:</label>
            <select class="form-control" name="vehicleChoice" id="vehicleChoice"
                    onchange="if (this.value=='Truck'){document.getElementById('truckOptions').style.visibility='visible'}else{document.getElementById('truckOptions').style.visibility='hidden'};">
                <option>Car</option>
                <option>Truck</option>
            </select>
            {{ csrf_field() }}
            <div id="truckOptions" style="visibility:hidden;">
                <div class="checkbox"><label> <input type="checkbox" id="bedUp" name="bedUp"> My bed is secured
                        and in the upright position. <strong>(Due to liability reasons, we cannot wash your truck if
                            your bed is down.)</strong></label></div>
                <div class="checkbox"><label> <input type="checkbox" id="cleanBed" name="cleanBed"> There is no
                        mud in my bed. <strong>(There is an extra $2 fee if you have mud in your bed).</strong></label>
                </div>
            </div>
        </div>
        <input type="hidden" name="discountMultiplier" value="1">
        <input type="hidden" name="licensePlate" value="<?php echo $licensePlate; ?>">
        <button type="submit" class="btn btn-default">Review Order</button>
    </form>
@endsection