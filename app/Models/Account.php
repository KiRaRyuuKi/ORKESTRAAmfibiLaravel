<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $table = 'detail_profile';
    protected $primaryKey = 'id';
    protected $fillable = [
        'address', 'telephone', 'date', 'picture',
    ];
}
