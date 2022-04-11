<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Like;
use App\Models\User;
use App\Models\Shop;
use Illuminate\Support\Facades\Auth;

class ShopLikeController extends Controller
{
    public function like(Request $request)
    {
        Like::create([
            'shop_id' => $request->shop_id,
            'user_id' => Auth::id(),
        ]);

        return back();
    }

    public function unlike(Request $request)
    {
        Like::where('shop_id', $request->shop_id)->where('user_id', Auth::id())->delete();

        return back();
    }
}