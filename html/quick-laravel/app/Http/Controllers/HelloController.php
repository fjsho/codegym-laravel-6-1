<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//モデルクラスをインポート
use App\Book;

//a.Controllerクラスを継承
class HelloController extends Controller
{
    //b.アクションメソッドを定義
    public function index()
    {
        //c.出力を戻り値に
        return'こんにちは、世界！';
    }

    public function view()
    {
        //a,ビュー変数を準備
        $data = [
            'msg' => 'こんにちは、世界！'
        ];
        //b.テンプレートを呼び出す
        return view('hello.view',$data);
    }

    public function list()
    {
        //booksデーブルから全行を取得
        $data = [
            'records' => Book::all()
        ];
        return view('hello.list',$data);
    }

    public function list2()
    {
        //booksデーブルから全行を取得
        $data = [
            'records' => Book::all()
        ];
        return view('hello.list2',$data);
    }
}

