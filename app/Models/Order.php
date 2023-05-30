<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Order extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id',
        'status',
        'notes',
        'payment_method',
        'payment_status',
        'payment_id',
        'checkout_data',
        'payment_meta'
    ];

    protected $table = 'orders';
    protected $table_order_items = 'order_items';

    public function  getOrder($id){
        $order = DB::table($this->table)
            ->select('orders.*', DB::raw('SUM(order_items.amount) as total'))
            ->join($this->table_order_items, $this->table.'.id', '=', $this->table_order_items.'.order_id')
            ->where($this->table.'.id', $id)
            ->groupBy($this->table.'.id')
            ->first();
        return $order; 
    }
    public function total(){
        return $this->hasMany(OrderItem::class)
            ->selectRaw('sum(amount) as total')
            ->groupBy('order_id')->first()->total;
    }
}
