<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        if (session()->get('type') == 'Admin') {
            return view('Dashboard.index');
        }
        return redirect()->back();
    }


    public function product()
    {
        if (session()->get('type') == 'Admin') {
        $product = Product::all();
        return view('Dashboard.product', compact('product'));
        }
        return redirect()->back();

    }



    public function deleteprodct($id)
    {
        if (session()->get('type') == 'Admin') {
        $deleteproduct = Product::find($id);
        $deleteproduct->delete();
        return redirect('/product');
        }
        return redirect()->back();

    }



    public function AddnewProduct(Request $request)
    {
        if (session()->get('type') == 'Admin') {
        $products = new Product();
        $products->title = $request->title;
        $products->description = $request->description;
        $products->Price = $request->Price;
        $products->Quantity = $request->Quantity;
        $products->Category = $request->Category;
        $products->type = $request->type;
        $imagename = time() . '.' . $request->Picture->extension();
        $request->Picture->move(public_path('Products'), $imagename);
        $products->Picture = $imagename;
        $products->save();
        return redirect('/product');
        }
        return redirect()->back();

    }



    public function UpdateProduct(Request $request)
    {
        if (session()->get('type') == 'Admin') {
        $product = Product::find($request->id);
        $product->title = $request->title;
        $product->description = $request->description;
        $product->Price = $request->Price;
        $product->Quantity = $request->Quantity;
        $product->Category = $request->Category;
        $product->type = $request->type;



        $product->save();

        return redirect('/product');
        }
        return redirect()->back();

    }
}
