<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimeNumberController extends Controller
{
    public function showForm()
    {
        return view('angkaprima');
    }

    public function calculatePrimes(Request $request)
    {
        $start = $request->input('start');
        $end = $request->input('end');
        $primes = [];

        for ($i = $start; $i <= $end; $i++) {
            if ($this->isPrime($i)) {
                $primes[] = $i;
            }
        }

        return view('angkaprima', ['primes' => $primes]);
    }

    private function isPrime($number)
    {
        if ($number < 2) {
            return false;
        }

        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                return false;
            }
        }

        return true;
    }
}
