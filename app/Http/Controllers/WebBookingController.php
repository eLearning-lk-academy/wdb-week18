<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\OrderItem;
use App\Models\Booking;

class WebBookingController extends Controller
{
    public function create(Request $request){
        $data = [
            'user_id' => 1,
            'room_id' => $request->room_id,
            'check_in' => time(),
            'check_out' => time(),
            'total_cost' => 100,
            'notes' => '',
            'occupants' => $request->booking_adults,
        ];
        $booking = Booking::create($data);
        $bookingData = session()->get('bookingData');
        $roomTypes = Room::roomTypes;
        
        return view('web.booking.create', compact('booking', 'bookingData', 'roomTypes'));

    }

    public function confirm(Request $request){
        // dd($request->all());
        $booking = Booking::find($request->booking_id);
        $bookingDuration = 24;

        $cost = $bookingDuration*$booking->room->price_per_hour;
        $booking->update([
            'notes' => $request->booking_note,
            'occupants' => $request->booking_adults,
            'status' => 'confirmed',
            'total_cost' => $cost,
        ]);
        
        session()->forget('bookingData');
        $orderItem = OrderItem::create([
            'item_type' => 'booking',
            'item_id' => $booking->id,
            'amount' => $booking->total_cost,
            'item_name' => 'Booking "'. $booking->room->name . '" for ' . $bookingDuration . ' hours',
        ]);

        if(!session()->has('orderItems')){
            session()->put('orderItems', [$orderItem->id]);
        }else{
            $orderItems = session()->get('orderItems');
            if(is_array($orderItems)){
                $orderItems[] = $orderItem->id;
            }else{
                $orderItems = [
                    $orderItems,
                    $orderItem->id
            ];
            }
            session()->put('orderItems', $orderItems);
        }
        return redirect()->route('cart');
    }
}
