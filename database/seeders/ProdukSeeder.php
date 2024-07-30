<?php

namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Produk::create([
            "nama_produk"=> "Anyaman Pandan",
            "img_produk"=> "images/img1.jpg",
            "deskripsi_produk"=> " Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt
                distinctio earum repellat quaerat voluptatibus placeat nam,
                commodi optio pariatur est quia magnam eum harum corrupti dicta,
                aliquam sequi voluptate quas.",
            "kategori_produk"=> "Tas Slempang",
            "harga"=> "50.000",
        ]);
        Produk::create([
            "nama_produk"=> "Anyaman Pandan",
            "img_produk"=> "images/img2.jpg",
            "deskripsi_produk"=> " Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt
                distinctio earum repellat quaerat voluptatibus placeat nam,
                commodi optio pariatur est quia magnam eum harum corrupti dicta,
                aliquam sequi voluptate quas.",
            "kategori_produk"=> "Tas Slempang",
            "harga"=> "50.000",
        ]);
        Produk::create([
            "nama_produk"=> "Anyaman Pandan",
            "img_produk"=> "images/img3.jpg",
            "deskripsi_produk"=> " Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt
                distinctio earum repellat quaerat voluptatibus placeat nam,
                commodi optio pariatur est quia magnam eum harum corrupti dicta,
                aliquam sequi voluptate quas.",
            "kategori_produk"=> "Tas Slempang",
            "harga"=> "50.000",
        ]);
        Produk::create([
            "nama_produk"=> "Anyaman Pandan",
            "img_produk"=> "images/img1.jpg",
            "deskripsi_produk"=> " Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt
                distinctio earum repellat quaerat voluptatibus placeat nam,
                commodi optio pariatur est quia magnam eum harum corrupti dicta,
                aliquam sequi voluptate quas.",
            "kategori_produk"=> "Tas Slempang",
            "harga"=> "50.000",
        ]);
        Produk::create([
            "nama_produk"=> "Anyaman Pandan",
            "img_produk"=> "images/img1.jpg",
            "deskripsi_produk"=> " Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt
                distinctio earum repellat quaerat voluptatibus placeat nam,
                commodi optio pariatur est quia magnam eum harum corrupti dicta,
                aliquam sequi voluptate quas.",
            "kategori_produk"=> "Tas Slempang",
            "harga"=> "50.000",
        ]);
    }
}
