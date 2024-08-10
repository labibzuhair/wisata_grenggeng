<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdukTerbaik extends Model
{
    protected $fillable = [
        'nama_produk', 'kategori', 'deskripsi', 'img1', 'img2', 'img3', 'img4', 'img5',
    ];
}
