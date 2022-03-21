<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{
    public function done(Request $request)
    {
        return view('done');
    }
    public function store(ReservationRequest $request)
    {

    }
    public function destroy(Request $request)
    {
        
    }
}
