<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\CarbonPeriod;
use Carbon\Carbon;

class jadwal extends Controller
{

    public function index()
    {
        return view('index');
    }

    public function submitDates(Request $request)
    {
        $request->validate([
            'start_year' => 'required|integer',
            'end_year' => 'required|integer|gte:start_year',
        ]);

        $startYear = $request->start_year;
        $endYear = $request->end_year;

        $leapYears = [];
        for ($year = $startYear; $year <= $endYear; $year++) {
            if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
                $leapYears[] = $year;
            }
        }

        return view('index', compact('leapYears'));
    }
}
