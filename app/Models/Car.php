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
        'name',
        'year',
        'transmission',
        'fuel_type',
        'status',
        'color',
        'capacity',
        'license_plate',
        'price',
        'image_1',
        'image_2',
        'image_3',
        'image_4',
        'image_5',
        'description',
        'accessories',
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

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
