<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use App\Models\Orderitem;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;
use Stripe;
class StripePaymentController extends Controller
{
    public function stripe(Request $data)
    {
        $bill = $data->input('bill');
        $name = $data->input('name');
        $address = $data->input('address');
        $phone = $data->input('phone');
        return view('stripe',compact('bill','name','address','phone'));
    }


    public function stripePost(Request $request): RedirectResponse
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
      
        Stripe\Charge::create ([
                "amount" => 10 * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Stripe Test Payment" 
        ]);
                
        return back()->with('success', 'Payment has been successful');
    }

    // public function stripePost(Request $request)
    // {
    //     Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        
    //     Stripe\Charge::create ([
    //             "amount" => $request->bill *100,
    //             "currency" => "usd",
    //             "source" => $request->stripeToken,
    //             "description" => "This payment is testing purpose of websolutionstuff.com",
    //     ]);
   
    //     Session::flash('success', 'Payment Successful !');
    //     if (session()->has('id')) {
    //         $order = new Order();
    //         $order->status = "Paid";
    //         $order->Customerid = session()->get('id');
    //         $order->bill = $request->bill;
    //         $order->address = $request->address;
    //         $order->phone = $request->phone;
    //         $order->name = $request->name;
    //         if ($order->save()) {
    //             $Carts = Cart::where('Customerid', session()->get('id'))->get();
    //             foreach ($Carts as $item) {
    //                 $product = Product::find($item->productid);
    //                 $orderitem = new Orderitem();
    //                 $orderitem->productid = $item->productid;
    //                 $orderitem->quantity = $item->quantity;
    //                 $orderitem->price = $product->Price;
    //                 $orderitem->orderid = $order->id;
    //                 $orderitem->save();
    //                 $item->delete();
    //             }
    //         }
    //         return redirect('/cart')->back()->with('success', 'congratulations your order has been place');
    //     }
    //     return back();
    // }
}











