<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProdukTerbaik;

class ProdukTerbaikSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProdukTerbaik::create([
            "nama_produk"=> "Produk Terbaik",
            "img1"=> "images/produk_anyaman/1.png",
            "img2"=> "images/produk_anyaman/2.png",
            "img3"=> "images/produk_anyaman/3.png",
            "img4"=> "images/produk_anyaman/4.png",
            "img5"=> "images/produk_anyaman/5.png",
            "deskripsi"=> " Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt
                distinctio earum repellat quaerat voluptatibus placeat nam,
                commodi optio pariatur est quia magnam eum harum corrupti dicta,
                aliquam sequi voluptate quas.",
            "kategori"=> "Tas Slempang",
        ]);
        ProdukTerbaik::create([
            "nama_produk"=> "Produk Terbaik",
            "img1"=> "images/produk_anyaman/4.png",
            "img2"=> "images/produk_anyaman/5.png",
            "img3"=> "images/produk_anyaman/6.png",
            "img4"=> "images/produk_anyaman/7.png",
            "img5"=> "images/produk_anyaman/8.png",
            "deskripsi"=> " Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt
                distinctio earum repellat quaerat voluptatibus placeat nam,
                commodi optio pariatur est quia magnam eum harum corrupti dicta,
                aliquam sequi voluptate quas.",
            "kategori"=> "Tas Slempang",
        ]);
        ProdukTerbaik::create([
            "nama_produk"=> "Produk Terbaik",
            "img1"=> "images/produk_anyaman/9.png",
            "img2"=> "images/produk_anyaman/10.png",
            "img3"=> "images/produk_anyaman/11.png",
            "img4"=> "images/produk_anyaman/12.png",
            "img5"=> "images/produk_anyaman/13.png",
            "deskripsi"=> " Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt
                distinctio earum repellat quaerat voluptatibus placeat nam,
                commodi optio pariatur est quia magnam eum harum corrupti dicta,
                aliquam sequi voluptate quas.",
            "kategori"=> "Tas Slempang",
        ]);
        ProdukTerbaik::create([
            "nama_produk"=> "Produk Terbaik",
            "img1"=> "images/produk_anyaman/14.png",
            "img2"=> "images/produk_anyaman/15.png",
            "img3"=> "images/produk_anyaman/16.png",
            "img4"=> "images/produk_anyaman/17.png",
            "img5"=> "images/produk_anyaman/18.png",
            "deskripsi"=> " Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt
                distinctio earum repellat quaerat voluptatibus placeat nam,
                commodi optio pariatur est quia magnam eum harum corrupti dicta,
                aliquam sequi voluptate quas.",
            "kategori"=> "Tas Slempang",
        ]);
        ProdukTerbaik::create([
            "nama_produk"=> "Produk Terbaik",
            "img1"=> "images/produk_anyaman/19.png",
            "img2"=> "images/produk_anyaman/20.png",
            "img3"=> "images/produk_anyaman/21.png",
            "img4"=> "images/produk_anyaman/22.png",
            "img5"=> "images/produk_anyaman/23.png",
            "deskripsi"=> " Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt
                distinctio earum repellat quaerat voluptatibus placeat nam,
                commodi optio pariatur est quia magnam eum harum corrupti dicta,
                aliquam sequi voluptate quas.",
            "kategori"=> "Tas Slempang",
        ]);
    }
}
