<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function index(){
        return view('admin.order.index');
    }

    public function dataTable(Request $request){
        
        $orders = Order::all();

        $data = [];
        foreach($orders as $order){
            $checkoutData = json_decode($order->checkout_data);
            $name = $checkoutData->first_name.' '.$checkoutData->last_name;
            $data[]=[
                $order->id,
                $order->total(),
                $name,
                $order->payment_method,
                $order->payment_status,
                $order->status,
                ''
            ];
        }

        $output = [
            "draw" => $request->draw,
            "recordsTotal" => Order::count(),
            "recordsFiltered" =>  Order::count(),
            "data" => $data,
        ];

        return response()->json($output);
    }
}
