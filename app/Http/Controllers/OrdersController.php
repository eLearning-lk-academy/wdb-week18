<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.orders.index');
    }

    /**
     * Datatable Ajax response.
     */
    public function datatable(Request $request){
        
        $data = [];

        $ordersQuery = Order::with(['user'])
            ->limit($request->length, $request->start);
        $orders = $ordersQuery->get();

        foreach($orders as $order){
            $checkoutData = json_decode($order->checkout_data);
            $name = $checkoutData->first_name ?? '' .' '.$checkoutData->last_name ?? '';
            $data [] = [
                $order->id,
                $order->total(),
                $name,
                $order->payment_method,
                $order->payment_status,
                $order->status,
                ''
                // '<a href="'.route('admin.orders.show', $order->id).'">'.$order->user->name.'</a>',
            ];
        }
        $output = [
            "draw" => $request->draw,
            "recordsTotal" => Order::count(),
            "recordsFiltered" => Order::count(),
            "data" => $data
        ];

        return response()->json($output);
    }


    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
