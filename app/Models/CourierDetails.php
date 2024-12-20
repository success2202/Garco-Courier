<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourierDetails extends Model
{
    use HasFactory;
    protected $fillable = ['product', 'images', 'weight', 'amount', 'payment', 'size', 'type', 'invoice_id', 'sender_name', 'sender_email', 'sender_phone', 'sender_address', 'receiver_name', 'receiver_email', 'receiver_phone', 'receiver_address', 'pick_date', 'departure_date', 'origin', 'destination', 'mode', 'qty', 'frieght', 'trackId'];

    public function TrackingInfo()
    {
       return $this->hasOne(Tracking::class, 'courier_info_id', 'id');
    }

}
