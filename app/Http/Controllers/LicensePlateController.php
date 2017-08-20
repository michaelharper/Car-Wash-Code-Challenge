<?php

namespace App\Http\Controllers;

use App\Visit;
use Illuminate\Http\Request;

use DB;

class LicensePlateController extends Controller {

    public function index()
    {
        // return view('start');
    }

    public function lookup()
    {
        $licensePlate = \request('licensePlate');
        //$previousCompletedVisits = DB::table('visits')->where('license_plate', $licensePlate)->where('paid', '1')->count();
        $previousCompletedVisits = Visit::paid()->where('license_plate', $licensePlate)->count();

        if ($licensePlate == "1111111")
        {
            echo "STOLEN!!! Please wait here while we contact the constable.";
            die();
        } elseif ($previousCompletedVisits > 0)
        {

            // $vehicle = DB::table('visits')->where('license_plate', $licensePlate)->pluck('vehicle');

            if ($previousCompletedVisits = '1')
            {

                dd($previousCompletedVisits);
                $discountMultiplier = 0.5;

                return view('returning-customer', [
                    'previousCompletedVisits' => $previousCompletedVisits,
                    'discountMultiplier'      => $discountMultiplier,
                    'vehicle'                 => $vehicle
                ]);
            }

            return view('returning-customer', [
                'previousCompletedVisits' => $previousCompletedVisits,
                'discountMultiplier'      => 1.0,
                'vehicle'                 => $vehicle
            ]);
        } else
        {
            // new customer
            return view('new-customer');
        }

    }

    public function returningCustomer($previousCompletedVisits)
    {
        //$vehicle =
        if ($previousCompletedVisits = '1')
        {
            echo "You've earned a discount!";
            //$2ndVisit = true;
            die();

        }
    }

    public function newCustomer()
    {

    }

    public function store($licensePlate, $previousCompletedVisits)
    {
        // Log license plate at start of visit

    }


}
