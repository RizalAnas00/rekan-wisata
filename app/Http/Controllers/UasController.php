<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UasController extends Controller
{
    public function show()
    {
        return view('tanggal');
    }
    public function checkDates(Request $request)
    {
        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        $startDate = \Carbon\Carbon::parse($request->start_date);
        $endDate = \Carbon\Carbon::parse($request->end_date);

        $dates = [];

        for ($date = $startDate; $date->lte($endDate); $date->addDay()) {
            if ($date->isWeekend()) {
                $dates[] = $date->format('d-m-Y') . ' (' . $date->format('l') . ')';
            }
        }

        return view('result', compact('dates'));
    }
}
