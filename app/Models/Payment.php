<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    use HasFactory;

    protected $fillable = [
        'user_id',
        'showroom_id',
        'car_id',
        'amount',
        'card_holder',
        'card_number',
        'card_expiry',
        'card_cvv',
        'date',
        'payment_date',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function showroom()
    {
        return $this->belongsTo(Showroom::class);
    }

    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}
