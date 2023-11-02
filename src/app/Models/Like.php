<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
  // 配列内の要素を書き込み可能にする
  protected $fillable = ['shop_id','user_id'];
  public $timestamps = false;

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
