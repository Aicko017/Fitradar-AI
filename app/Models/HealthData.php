<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HealthData extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'name', 'gender', 'birthdate', 'height', 'weight', 'bmi'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

