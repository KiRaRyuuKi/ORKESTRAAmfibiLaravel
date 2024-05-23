<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RentalCar extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'car_id', 'start_date', 'end_date'];

    protected $dates = ['start_date', 'end_date'];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function cars()
    {
        return $this->belongsTo(Car::class);
    }
}
