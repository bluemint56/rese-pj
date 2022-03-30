<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use App\Models\Area;
use App\Models\Genre;

class ShopController extends Controller
{
    public function index(Request $request)
    {
        $shops = Shop::all();
        return view('shop_all', ['shops' => $shops]);
    }

    public function detail($id)
    {
        $shop = Shop::find($id);
        return view('shop_detail', ['shop' => $shop]);
    }

    public function search(Request $request)
    {
        
    }
}
