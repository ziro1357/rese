<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use App\Models\User;
use App\Models\Reservation;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{
    public function index()
    {
      $shops = Shop::all();
      return view('index', compact('shops'));
    }

    public function detail($id)
    {
    $detail = Shop::find($id);
    return view("detail", compact('detail'));
    }

    public function mypage()
    {
       $shops = Shop::all();
       // 現在認証しているユーザーのIDを取得し、検索
       $id = auth()->id();
       $reservations = Reservation::where('user_id',$id)->get();

       return view('mypage', compact('shops','reservations'));
    }



}
