<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
  public function shop()
  {
    // return $this->belongsTo(Shop::class);
    return $this->belongsTo('App\Models\Shop','shop_id');
  }

  public function user()
  {
    // return $this->belongsTo(User::class);
    return $this->belongsTo('App\Models\User','user_id');
  }
}
