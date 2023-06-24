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
        // dd($request->all());
        $columnsOrder  = [
            'id',
            'total',
            'name',
            'payment_method',
            'payment_status',
            'status',
            null
        ];
        $ordersQuery = Order::query()
            ->selectRaw('orders.*,
            (SELECT SUM(amount) FROM order_items WHERE order_id = orders.id) AS total,
            CONCAT_WS(" ",TRIM(BOTH "\"" FROM JSON_EXTRACT(checkout_data, "$.first_name")),TRIM(BOTH "\"" FROM JSON_EXTRACT(checkout_data, "$.last_name")))  AS name
            ');

        if($request->order && !empty($columnsOrder[$request->order[0]['column']])){
            $ordersQuery->orderBy($columnsOrder[$request->order[0]['column']], $request->order[0]['dir'] );
        }else{
            $ordersQuery->orderBy('id','asc');
        }

        if($request->length && $request->length!=-1){
            $ordersQuery->offset($request->start)->limit($request->length);
        }

        $orders = $ordersQuery->get();

        $data = [];
        foreach($orders as $order){
            
            $data[]=[
                $order->id,
                $order->total,
                $order->name,
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
