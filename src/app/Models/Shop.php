<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Shop extends Model
{
    public function reserves(){
        return $this->hasMany('App\Models\Reservation');
    }

    public function likes(){
        return $this->hasMany('App\Models\Like');
    }


 /**
  * ショップにLIKEを付いているかの判定
  *
  * @return bool true:Likeがついてる false:Likeがついてない
  */
  public function is_liked_by_auth_user()
  {
    $id = Auth::id();

    $likers = array();
    foreach($this->likes as $like) {
      array_push($likers, $like->user_id);
    }

    if (in_array($id, $likers)) {
      return true;
    } else {
      return false;
    }
  }


 /**
  * ショップに予約があるかの判定
  *
  * @return bool true:Likeがついてる false:Likeがついてない
  */
  public function is_reserved_by_auth_user()
  {
    $id = Auth::id();

    $reservations = array();
    foreach($this->reservations as $reservation) {
      array_push($reservations, $reservation->user_id);
    }

    if (in_array($id, $reservations)) {
      return true;
    } else {
      return false;
    }
  }


}