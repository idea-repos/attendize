<?php

namespace App;

use CreateOrderOwnerOrdersTable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class OrderOwner extends Authenticatable
{
    //
    public function orders(){
        return $this->hasMany(OrderOwnerOrders::class);
    }
}
