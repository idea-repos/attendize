<?php

namespace App;

use App\Models\Order;
use CreateOrderOwnerOrdersTable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class OrderOwner extends Authenticatable
{
    //
    // public function orders(){
    //     return $this->hasMany(OrderOwnerOrders::class);
    // }

    public function orders()
    {
        return $this->hasManyThrough(
            Order::class,
            OrderOwnerOrders::class,
            'order_owner_orders_id', // Foreign key on users table...
            'order_id', // Foreign key on posts table...
            'id', // Local key on countries table...
            'id' // Local key on users table...
        );
    }
}
