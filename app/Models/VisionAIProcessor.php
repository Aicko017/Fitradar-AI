<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisionAIProcessor extends Model
{
    use HasFactory;

    protected $table = 'vision_ai_processor';

    // Jika kamu ingin izinkan mass assignment (optional):
    protected $fillable = [
        'id_pengguna',
        'input_gambar',
        'deteksi_makanan',
        'kalori',
        'protein',
        'lemak',
        'karbohidrat',
        'serat'
    ];

     public function user()
    {
        return $this->belongsTo(User::class, 'id_pengguna');
    }
}