<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use App\Models\Area;
use App\Models\Genre;
use App\Models\Like;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{
    public function index(Request $request)
    {
        $shops = Shop::all();
        $user = Auth::user();
        $like = Like::find($user);
        return view('shop_all', ['shops' => $shops, 'user' => $user, 'like' => $like]);
    }

    public function detail($shop_id)
    {
        $shop = Shop::find($shop_id);
        return view('shop_detail', ['shop' => $shop]);
    }

    public function search(Request $request)
    {
        $shops = Shop::where('area_id', $request->area_id)
        ->where('genre_id', $request->genre_id)
        ->where('name', 'LIKE', '%'.$request->input.'%')->get();

        return view('shop_all', ['shops' => $shops]);

    }
}
