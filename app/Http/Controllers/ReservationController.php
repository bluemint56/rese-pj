<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Shop;
use App\Models\User;
use App\Http\Requests\ReservationRequest;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function done(Request $request)
    {
        return view('done');
    }
    public function store(ReservationRequest $request)
    {
        $reservation = new Reservation;
        dd($request);
        $reservation = $request->all();
        Reservation::create($reservation);
        return redirect('/done');
    }
    public function destroy(Request $request)
    {
        $reservation = Reservation::find($request->id);
        Reservation::find($request->id)->delete();
        return redirect('/mypage');
    }
}
