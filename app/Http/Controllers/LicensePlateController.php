<?php

namespace App\Http\Controllers;

use App\Visit;
use Illuminate\Http\Request;

use DB;

class LicensePlateController extends Controller {

    public function lookup()
    {
        $licensePlate = \request('licensePlate');
        //$previousCompletedVisits = DB::table('visits')->where('paid', '1')->where('license_plate', $licensePlate)->count();
        $previousCompletedVisits = Visit::paid()->where('license_plate', $licensePlate)->count();
        //dd($previousCompletedVisits);

        if ($licensePlate == "1111111")
        {
            echo "STOLEN!!! Please wait here while we contact the constable.";
            die();
        } elseif ($previousCompletedVisits > 0)
        {

            $vehicle = DB::table('visits')->where('license_plate', $licensePlate)->pluck('vehicle')->first();

            if ($previousCompletedVisits == 1)
            {

                $discountMultiplier = 0.5;

                return view('returning-customer', [
                    'previousCompletedVisits' => $previousCompletedVisits,
                    'discountMultiplier'      => $discountMultiplier,
                    'vehicle'                 => $vehicle,
                    'licensePlate'            => $licensePlate
                ]);
            }

            return view('returning-customer', [
                'previousCompletedVisits' => $previousCompletedVisits,
                'discountMultiplier'      => 1.0,
                'vehicle'                 => $vehicle,
                'licensePlate'            => $licensePlate
            ]);
        } else
        {
            // new customer
            return view('new-customer', [
                'licensePlate' => $licensePlate
            ]);
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
