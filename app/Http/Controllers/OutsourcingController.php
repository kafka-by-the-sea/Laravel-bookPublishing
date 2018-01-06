<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OutsourcingController extends Controller
{

    public function getIndex()
    {
        return view('outsourcing.index');
    }
}
