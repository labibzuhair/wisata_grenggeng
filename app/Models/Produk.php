<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_produk',
        'harga',
        'kategori_produk',
        'deskripsi_produk',
        'img_produk1',
        'img_produk2',
        'img_produk3',
        'img_produk4',
        'img_produk5',
        // Tambahkan kolom lainnya sesuai kebutuhan
    ];
}
