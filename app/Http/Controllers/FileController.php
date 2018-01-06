<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tag;

class FileController extends Controller
{   
    public function create()
    {
        $tags = Tag::all();
        return view('product.create', compact('tags'));
    }

    public function store()
    {
        //輸入的資料存進資料庫（還沒寫）
        return redirect()->route('file');  
    }

    //轉檔的頁面
    public function file()
    {
        return view('product.file');
    }

}
