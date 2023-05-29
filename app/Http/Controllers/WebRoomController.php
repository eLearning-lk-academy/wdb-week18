<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class WebRoomController extends Controller
{
    public function index(Request $request)
    {
        // $rooms = Room::where('type', $request->booking_roomtype)
        //     ->where('occupancy','>=',$request->booking_adults)
        //     ->where('status','available')
        //     ->get();

        $rooms = new Room;
        if($request->booking_roomtype){
            $rooms =$rooms->where('type', $request->booking_roomtype);
        }
        if($request->booking_adults){
            $rooms =$rooms->where('occupancy','>=',$request->booking_adults);
        }
        $rooms =$rooms->get();

        $bookingData= [
            'booking_roomtype' => $request->booking_roomtype,
            'booking_adults' => $request->booking_adults,
            'booking_email' => $request->booking_email,
            'booking_date'=> $request->booking_date,
            'booking_name' => $request->booking_name,
        ];

        session()->put('bookingData', $bookingData);
        
        return view('web.rooms.list', compact('rooms'));
        
    }
    public function show($slug)
    {
        $room = Room::where('slug',$slug)->first();
        $bookingData = session()->get('bookingData');
        $roomTypes = Room::roomTypes;
        return view('web.rooms.show', compact('room', 'bookingData', 'roomTypes'));
    }
}
