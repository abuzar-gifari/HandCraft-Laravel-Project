<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    public function index()
    {
        $products = Product::get();
        return view('admin.product_view', compact('products'));
    }

    public function add()
    {
        return view('admin.product_add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
        ]);

        $ext = $request->file('photo')->extension();
        $final_name = time().'.'.$ext;
        $request->file('photo')->move(public_path('uploads/'),$final_name);

        $obj = new Product();
        $obj->name = $request->name;
        $obj->price = $request->price;
        $obj->photo = $final_name;
        $obj->save();

        return redirect()->back()->with('success', 'product is added successfully.');

    }


    public function edit($id)
    {
        $product_data = Product::where('id',$id)->first();
        return view('admin.product_edit', compact('product_data'));
    }


    public function update(Request $request,$id) 
    {        
        $request->validate([
            'name' => 'required',
            'price' => 'required',
        ]);

        $ext = $request->file('photo')->extension();
        $final_name = time().'.'.$ext;
        $request->file('photo')->move(public_path('uploads/'),$final_name);

        $obj = new Product();
        $obj->name = $request->name;
        $obj->price = $request->price;
        $obj->photo = $final_name;
        $obj->save();

        return redirect()->back()->with('success', 'product is added successfully.');
    }

    public function delete($id)
    {
        $single_data = Product::where('id',$id)->first();
        $single_data->delete();

        return redirect()->back()->with('success', 'product is deleted successfully.');
    }
}
