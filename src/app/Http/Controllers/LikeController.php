<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use App\Models\Like;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{

    public function like($id)
    {
    Like::create([
      'shop_id' => $id,
      'user_id' => Auth::id(),
    ]);

      return redirect('/')->with('message', 'お気に入りに追加しました');
    }

    public function unlike($id)
    {
      $like = Like::where('shop_id', $id)->where('user_id', Auth::id())->first();
      $like->delete();

      return redirect('/')->with('message', 'お気に入りを解除しました');
    }

}
