<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    use HasFactory;

    // Pastikan nama tabel dan kolom yang bisa diisi sudah benar
    protected $fillable = [
        'music_path',
        'gallery_1',
        'gallery_2',
        'gallery_3',
        // Tambahkan ini jika kamu pakai kolom lain
        'gallery_4',
        'gallery_5',
        'gallery_6'
    ];
}
