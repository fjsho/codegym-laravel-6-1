<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class RecordController extends Controller
{
    //id=1である書籍情報を取得
    public function find()
    {
        return Book::find(1)->title;
    }

    public function hasmany()
    {
        return view('record.hasmany',[
            'book' => Book::find(1)
        ]);
    }
}
