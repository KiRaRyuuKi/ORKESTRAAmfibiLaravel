<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'activity',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function logActivity($userId, $activity)
    {
        return self::create([
            'user_id' => $userId,
            'activity' => $activity,
        ]);
    }
}
