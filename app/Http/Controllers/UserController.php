<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Reservation;
use App\Models\Shop;
use App\Models\Like;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        $shop = Shop::find($user->id);
        $reservation = Reservation::find($user->id);

        $user_id = Auth::id();

        $shops = Shop::with(['likes' => function($query) use($user_id){
            $query->where('user_id', $user_id);
        }])->get();

        $r_time = config('reservation_time');
        $r_number = config('reservation_number');

        $today = Carbon::now();

        return view('my_page', [
            'user' => $user,
            'shop' => $shop,
            'reservation' => $reservation,
            'r_time' => $r_time,
            'r_number' => $r_number,
            'today' => $today,
            ]);
    }
}
