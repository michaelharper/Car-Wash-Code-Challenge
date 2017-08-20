<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Visit;

use DB;

class VisitsController extends Controller {

    public function index()
    {
        $visits = Visit::all();

        //$visits = DB::table('visits')->get();

        return view('visits.index', compact('visits'));
    }

    public function show(Visit $visit)
    {
        //$visit = DB::table('visits')->find($id);

        //return $visit;

        return view('visits.show', compact('visit'));
    }

    public function unpaid()
    {
        $visits = Visit::unpaid()->get();

        return view('visits.index', compact('visits'));
    }

    public function paid()
    {
        $visits = Visit::paid()->get();

        return view('visits.index', compact('visits'));
    }
}
