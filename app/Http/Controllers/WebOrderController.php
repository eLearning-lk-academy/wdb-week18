<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\OrderItem;

class WebOrderController extends Controller
{
    public function cart(){
        
        
        $orderItems = OrderItem::whereIn('id', session()->get('orderItems'))->get();

        return view('web.orders.cart', compact('orderItems'));
    }

    public function checkout(Request $request){
        
        $diff = array_diff(session()->get('orderItems'), $request->items); 
        OrderItem::whereIn('id', $diff)->delete();
        session()->forget('orderItems');
        $order = Order::create([
            'user_id' => 1,
            'status' => 'pending',
            'notes' => '',
            'payment_method' => 'cash',
            'payment_status' => 'pending',
            'payment_id' => '',
        ]);
        OrderItem::whereIn('id', $request->items)->update([
            'order_id' => $order->id,
        ]);

        dd($order);
    }
}
