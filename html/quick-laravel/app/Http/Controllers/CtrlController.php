<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CtrlController extends Controller
{
    //
    public function plain()
    {
        return response('hello,world!', 200)
            ->header("Content-Type", 'text/plain');
    }
    public function header()
    {
        return response()
            ->view('ctrl.header', ['msg' => 'Hello.World!'], 200)
            ->header('Content-Type', 'text/xml');
    }

    public function index(Request $req)
    {
        return 'リクエストパス：' . $req->path();
    }

    public function form()
    {
        return view('ctrl.form', ['result' => '']);
    }
    public function result(Request $req)
    {
        //a.リクエスト情報を取得
        $name = $req->name;
        return view('ctrl.form', [
            'result' => 'こんにちは、' . $name . 'さん！'
        ]);
    }

    public function middle()
    {
        return 'log is recorded!!';
    }
}
