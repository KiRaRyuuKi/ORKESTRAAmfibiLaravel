<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaleCar extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'car_id', 'price'];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function cars()
    {
        return $this->belongsTo(Car::class);
    }
}
