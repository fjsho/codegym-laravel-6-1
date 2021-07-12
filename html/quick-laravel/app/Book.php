<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//モデルクラスを継承
class Book extends Model
{
    //fillメソッドによる割り当ての許可($fillableプロパティ)⇨マスアサインメント脆弱性対策
    protected $fillable = ['isbn', 'title', 'price', 'publisher', 'published']; 

    //reviewsテーブルへの参照
    public function reviews()
    {
        return $this->hasMany('App\Review');
    }
}
