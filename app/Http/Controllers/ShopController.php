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
        $user_id = Auth::id();

        $shops = Shop::with(['likes' => function($query) use($user_id){
            $query->where('user_id', $user_id);
        }])->get();

        return view('shop_all', ['shops' => $shops]);
    }

    public function detail($shop_id)
    {
        $shop = Shop::find($shop_id);
        return view('shop_detail', ['shop' => $shop]);
    }

    public function search(Request $request)
    {
        if($request->area_id == '0'){
            $shops = Shop::where('genre_id', $request->genre_id)
            ->where('name', 'LIKE', '%'.$request->input.'%')->get();

            return view('shop_all', ['shops' => $shops]);
        }
        elseif($request->genre_id == '0'){
            $shops = Shop::where('area_id', $request->area_id)
            ->where('name', 'LIKE', '%'.$request->input.'%')->get();

            return view('shop_all', ['shops' => $shops]);
        }
        elseif($request->area_id == '0' && $request->genre_id == '0'){
            $shops = Shop::where('name', 'LIKE', '%'.$request->input.'%')->get();

            return view('shop_all', ['shops' => $shops]);
        }
    }
}