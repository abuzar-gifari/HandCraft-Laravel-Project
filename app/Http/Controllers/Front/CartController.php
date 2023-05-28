<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function addcart(Request $request){

        $obj = new Cart();
        $obj->user_id = Auth::guard('customer')->user()->id;
        $obj->product_id = $request->product_id;
        $obj->name = $request->name;
        $obj->price = $request->price;
        $obj->save();

        return redirect()->back()->with('success', 'Add to cart successful');
    }

    public function addcartremove($id){

        $obj = Cart::where('id',$id)->delete();
        return redirect()->back()->with('success', 'Add to cart remove successful');
    }
}
