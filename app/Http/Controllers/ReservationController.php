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
        Reservation::create([
            'shop_id' => $request->shop_id,
            'user_id' => Auth::id(),
            'date' => $request->date,
            'time' => $request->time,
            'number' => $request->number,
        ]);

        return redirect('/done');
    }
    public function destroy(Request $request)
    {
        $reservation = Reservation::find($request->id);
        $reservation->delete();

        return back();
    }
    public function update(ReservationRequest $request)
    {
        $reservation = Reservation::where('id', $request->id)->update([
            'date' => $request->date,
            'time' => $request->time,
            'number' => $request->number,
        ]);
        return back();
    }
}
