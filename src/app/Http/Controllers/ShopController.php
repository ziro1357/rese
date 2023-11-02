<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use App\Models\User;

class ShopController extends Controller
{
    public function index()
    {
      $shops = Shop::all();
    // $shops = Shop::with('likes')->get();
      return view('index', compact('shops'));
    }

    public function detail($id)
    {
    $detail = Shop::find($id);
    return view("detail", compact('detail'));
    }


}
