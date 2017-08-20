<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class OrdersController extends Controller {

    public function review(Request $request)
    {
        $vehicle = \request('vehicleChoice');
        $bedUp = \request('bedUp');
        $cleanBed = \request('cleanBed');
        $discountMultiplier = \request('discountMultiplier');
        $licensePlate = \request('licensePlate');
        //dd($vehicle);
        //dd($request->all());
        if ($vehicle == "Car")
        {
            $total = (5 * $discountMultiplier);
            echo "Thank you for your order. Your total is $" . $total;

            $timestamp = date('Y-m-d G:i:s');

            DB::table('visits')->insertGetId(
                ['created_at' => $timestamp, 'updated_at' => $timestamp, 'license_plate' => $licensePlate, 'vehicle' => $vehicle, 'total' => $total, 'paid' => 1]
            );
        } elseif ($vehicle == "Truck")
        {
            if (is_null($bedUp))
            {
                echo "I'm sorry, but we can not wash a truck unless the bed is up.";
                die();
            } elseif (is_null($cleanBed))
            {
                $total = (12 * $discountMultiplier);
            } else
            {
                $total = (10 * $discountMultiplier);
            }

            echo "Thank you for your order. Your total is $" . $total;

            $timestamp = date('Y-m-d G:i:s');

            DB::table('visits')->insertGetId(
                ['created_at' => $timestamp, 'updated_at' => $timestamp, 'license_plate' => $licensePlate, 'vehicle' => $vehicle, 'total' => $total, 'paid' => 1]
            );
        }
    }
}
