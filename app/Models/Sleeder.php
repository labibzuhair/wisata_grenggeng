<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sleeder extends Model
{
    protected $fillable = [
        'nama_wisata', 'kategori_wisata', 'deskripsi_wisata', 'img_wisata',
    ];
}
