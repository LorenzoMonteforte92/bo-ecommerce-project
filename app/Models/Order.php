<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;
use App\Models\Shipment;

class Order extends Model
{
    use HasFactory;

    public function type()
    {
        return $this->belongsTo(Client::class);
    }

    public function shipment ()
    {
        return $this->hasMany(Shipment::class, 'order_product');
    }
}
