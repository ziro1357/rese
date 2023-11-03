<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use Illuminate\Support\Facades\Auth;



class ReservationController extends Controller
{
    public function Reservation(Request $request)
    {
    Reservation::create([
      'shop_id' => $request->shop_id,
      'user_id' => Auth::id(),
      'date' => $request->date,
      'time' => $request->time,
      'number' => $request->number,
    ]);
      return redirect('/');
    }

}
