<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function products(){
        return view('front.products');
    }
    public function cart(){
        return view('front.cart');
    }
    public function checkout(){
        return view('front.checkout');
    }
}
