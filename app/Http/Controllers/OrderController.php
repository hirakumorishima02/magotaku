<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Orders;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function order(Request $request) {
        $order = new Orders;
        $order->orderer_id = Auth::user()->id;
        $order->apple = $request->apple;
        $order->onion = $request->onion;
        $order->rice = $request->rice;
        $order->tomato = $request->tomato;
        $order->beaf = $request->beaf;
        $order->fish = $request->fish;
        $order->status = 1;
        $order->save();
        
        $orders = Orders::where('status', 1)->get();
        return view('welcome',compact('orders'));
    }
    
    public function getOrder(Request $request) {
        $order = Orders::where('id', $request->order_id)->first();
        $order->contractor_id = Auth::user()->id;
        $order->status = 2;
        $order->save();

       return redirect('/home');
    }
}
