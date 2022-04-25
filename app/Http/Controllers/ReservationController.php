<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Shop;
use App\Models\User;
use App\Models\Score;
use App\Http\Requests\ReservationRequest;
use App\Http\Requests\ScoreRequest;
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
        Reservation::find($request->id)->delete();

        return back();
    }
    public function update(ReservationRequest $request)
    {

        Reservation::find($request->id)->update([
            'date' => $request->date,
            'time' => $request->time,
            'number' => $request->number,
        ]);
        return back();
    }
    public function shopScore(ScoreRequest $request)
    {
        Score::create([
            'user_id' => Auth::id(),
            'shop_id' => $request->shop_id,
            'score' => $request->score,
            'comment' => $request->comment,
        ]);

        return back();
    }
}
