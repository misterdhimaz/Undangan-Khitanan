<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wish extends Model
{
    use HasFactory;

    // Pastikan nama tabel benar (biasanya 'wishes')
    protected $table = 'wishes';

    // Izinkan kolom ini diisi
protected $fillable = ['sender_name', 'message', 'is_hidden'];
}
