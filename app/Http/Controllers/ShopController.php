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

    public function detail(Request $request, $id)
    {
        $shop = Shop::find($id);
        return view('shop_detail', ['shop' => $shop]);
    }

    public function search(Request $request)
    {
        $area = $request->input('area');
        $genre = $request->input('genre');
        $name = $request->input('name');

        if (!empty($area) && empty($genre) && empty($name)){
            $query = Shop::query();
            $shops = $query->where('name', 'LIKE', '%'.$area.'%')->get();

            return view('shop_all', ['shops' => $shops]);
        }
        elseif (empty($area) && !empty($genre) && empty($name)){
            $query = Shop::query();
            $shops = $query->where('genre', 'LIKE', '%'.$genre.'%')->get();

            return view('shop_all', ['shops' => $shops]);
        }
        elseif (empty($area) && empty($genre) && !empty($name)){
            $query = Shop::query();
            $shops = $query->where('name', 'LIKE', '%'.$name.'%')->get();

            return view('shop_all', ['shops' => $shops]);
        }
        else{
            return back();
        }
    }
}
