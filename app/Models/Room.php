<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Booking;

class Room extends Model
{
    use HasFactory;

    protected $fillable =[
        'number',
        'name',
        'type',
        'description',
        'short_description',
        'beds',
        'slug',
        'occupancy',
        'price_per_hour',
        'status',
        'image'
    ];

    const roomTypes = [
        'standard' => 'Standard',
        'deluxe' => 'Deluxe',
        'luxury' => 'Luxury',
        'suite' => 'Suite',
    ];

    const roomStatus = [
        'available' => 'Available',
        'unavailable' => 'Unavailable',
        'maintenance' => 'Maintenance',
    ];

    public function bookings(){
        return $this->hasMany(Booking::class);
    }

    public function upcomingBookings(){
        return $this->hasMany(Booking::class)
            ->where('check_out', '>=', time())
            ->get();
    }
}
