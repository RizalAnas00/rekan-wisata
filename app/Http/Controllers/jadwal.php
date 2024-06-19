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
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        $startDate = Carbon::parse($request->start_date);
        $endDate = Carbon::parse($request->end_date);
        $period = CarbonPeriod::create($startDate, $endDate);

        $weekendDates = [];
        foreach ($period as $date) {
            if ($date->isSaturday() || $date->isSunday()) {
                $weekendDates[] = [
                    'day' => $date->format('l'),
                    'date' => $date->format('j F Y'),  // Ubah format tanggal di sini
                ];
            }
        }

        return view('index', compact('weekendDates'));
    }
}
