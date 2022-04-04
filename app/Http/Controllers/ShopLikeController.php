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
            'shop_id' => $shop->id,
            'user_id' => Auth::id(),
        ]);

        return back();
    }

    public function unlike(Request $request)
    {
        $like = Like::where('Shop_id', $id)->where('user_id', Auth::id())->first();
        $like->delete();

        return back();
    }
}
