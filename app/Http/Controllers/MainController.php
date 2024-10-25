<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Orderitem;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class MainController extends Controller
{
    public function index()
    {
        $allproduct = Product::all();
        $hotesaller = Product::where('type', 'sale')->get();
        $newarival = Product::where('type', 'new-arrivals')->get();
        return view('index', compact('allproduct', 'newarival', 'hotesaller'));
    }

    public function cart()
    {
        if (session()->get('type') == 'User') {

        $cartitems = DB::table('products')
            ->join('carts', 'carts.productid', '=', 'products.id')
            ->select('products.title', 'products.price', 'products.Picture', 'carts.*')
            ->where('carts.Customerid', session()->get('id'))
            ->get(); // Execute the query and fetch the data

        return view('cart', compact('cartitems'));
        }
        return redirect()->back();
    }





    public function shop()
    {
        return view('shop');
    }


    public function singleproduct($id)
    {
        $product = Product::find($id);
        return view('singleproduct', compact('product'));
    }
    public function deleteCartitem($id)
    {
        if (session()->get('type') == 'Customer') {

            $Cartitem = Cart::find($id);
            $Cartitem->delete();
            return redirect()->back();
        }
        return redirect()->back();
    }
    public function Login()
    {
        return view('Login');
    }

    public function register()
    {
        return view('register');
    }

    public function registersave(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $imagename = time() . '.' . $request->file->extension();
        $request->file->move(public_path('userimage'), $imagename);
        $user->picture = $imagename;
        $user->type = "Customer";
        if ($user->save()) {
            return redirect('Login')->with('success', 'congratulations your account is reday');
        }
        return view('register');
    }



    public function LoginUser(Request $request)
    {

        $user = User::where('email', $request->email)->where('password', $request->password)->first();
        if ($user) {
            session()->put('id', $user->id);
            session()->put('type', $user->type);
            if ($user->type == 'User') {
                return redirect('/');
            } else if ($user->type == 'Admin') {
                return redirect('/admin');
            }
        } else {
            return redirect('Login')->with('error', 'try');
        }
    }




    public function Logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        return redirect('/');
    }





    public function addtocart(Request $request)
    {
        if (session()->has('id')) {
            $Item = new Cart();
            $Item->quantity = $request->quantity;
            $Item->productid = $request->id;
            $Item->Customerid = session()->get('id');
            $Item->save();
            return redirect('/cart')->with('success', 'congratulations item added in cart');
        } else {
            return redirect('Login')->with('error', 'login in seystem');
        }
    }






    public function updateCart(Request $request)
    {
        if (session()->has('id')) {
            $Item = Cart::find($request->id);
            $Item->quantity = $request->quantity;
            $Item->save();
            return redirect()->back()->with('success', 'congratulations item quentity update');
        } else {
            return redirect('Login')->with('error', 'login in seystem');
        }
    }




    public function checkout(Request $request)
    {
        if (session()->has('id')) {
            $order = new Order();
            $order->status = "pending";
            $order->Customerid = session()->get('id');
            $order->bill = $request->bill;
            $order->address = $request->address;
            $order->phone = $request->phone;
            $order->name = $request->name;
            if ($order->save()) {
                $Carts = Cart::where('Customerid', session()->get('id'))->get();
                foreach ($Carts as $item) {
                    $product = Product::find($item->productid);
                    $orderitem = new Orderitem();
                    $orderitem->productid = $item->productid;
                    $orderitem->quantity = $item->quantity;
                    $orderitem->price = $product->Price;
                    $orderitem->orderid = $order->id;
                    $orderitem->save();
                    $item->delete();
                }
            }
            return redirect()->back()->with('success', 'congratulations your order has been place');
        }
    }
}
