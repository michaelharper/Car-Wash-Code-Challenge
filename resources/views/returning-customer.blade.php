<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('title', 'Car Wash - Returnimg Customer')

{{--@section('sidebar')--}}
{{--@parent--}}

{{--<p>This is appended to the master sidebar.</p>--}}
{{--@endsection--}}

@section('content')
    <h1>Car Wash App: Returning Customer</h1>
    <p>Welcome back valued customer!<br>Previous Car Washes: <?= $previousCompletedVisits; ?><br>Vehicle: <?= $vehicle; ?><br>License Plate: <?= $licensePlate; ?>    </p>

    @if($vehicle == "Truck")
        <?php $price = 10; ?>
        <p>Truck wash price: $<?= $price; ?></p>
        <form action="/review" method="POST">
            <div class="form-group">
                {{ csrf_field() }}
                <div class="checkbox"><label> <input type="checkbox" id="bedUp" name="bedUp"> My bed is secured
                        and in the upright position. <strong>(Due to liability reasons, we cannot wash your truck if
                            your bed is down.)</strong></label></div>
                <div class="checkbox"><label> <input type="checkbox" id="cleanBed" name="cleanBed"> There is no
                        mud in my bed. <strong>(There is an extra $2 fee if you have mud in your bed).</strong></label>
                </div>
            </div>
            @if($discountMultiplier == 0.5)
                <p><strong>SECOND VISIT!!! You get 50% off your car wash today!</strong></p>
                <input type="hidden" name="discountMultiplier" value="<?php echo $discountMultiplier; ?>">
                <input type="hidden" name="vehicleChoice" value="<?php echo $vehicle; ?>">
                <input type="hidden" name="licensePlate" value="<?php echo $licensePlate; ?>">
            @endif
            <button type="submit" class="btn btn-default">Next Step: Review Order</button>
        </form>
    @else
        @if($discountMultiplier == 0.5)
            <p><strong>SECOND VISIT!!! You get 50% off your car wash today!</strong></p>
            <input type="hidden" name="discountMultiplier" value="<?php echo $discountMultiplier; ?>">
            <input type="hidden" name="vehicleChoice" value="<?php echo $vehicle; ?>">
            <input type="hidden" name="licensePlate" value="<?php echo $licensePlate; ?>">
        @endif
        <button type="submit" class="btn btn-default">Review Order</button>
    @endif

@endsection