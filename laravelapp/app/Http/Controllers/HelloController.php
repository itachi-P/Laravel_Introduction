<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index()
    {
        $data = [
            ['name'=>'山田たろ〜', 'mail'=>'taro@yamada'],
            ['name'=>'田中はなこ', 'mail'=>'hanako@flower'],
            ['name'=>'鈴木サチコ', 'mail'=>'sachico@happy-girl'],
            ['name'=>'スパ石井たまこ', 'mail'=>'tamako@spicy']
        ];
        return view('hello.index', ['data'=>$data]);
    }

    public function post(Request $request)
    {
        return view('hello.index', ['msg'=>$request->msg]);
    }
}