<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Reservation;
use App\Models\Shop;
use App\Models\Like;

class UserController extends Controller
{
    public function index(Request $request)
    {
        return view('my_page');
    }
}
