<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'showroom_id',
        'brand_id',
        'category_id',
        'year',
        'fuel_type',
        'transmission',
        'price',
        'status',
        'color',
        'description',
        'capacity',
        'license_plate',
        'image1',
        'image2',
        'image3',
        'image4',
        'image5',
        'accessories',
    ];

    protected $casts = [
        'accessories' => 'array',
    ];

    public function showroom()
    {
        return $this->belongsTo(Showroom::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function rentals()
    {
        return $this->hasMany(RentalCar::class);
    }

    public function sales()
    {
        return $this->hasMany(SaleCar::class);
    }
}
