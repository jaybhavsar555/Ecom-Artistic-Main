<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CardViewController extends Controller
{
    public function index(){

        $products= Product::all();
        return view('layouts.inc.cardView',compact('products'));
    }
}
