<?php

namespace Database\Seeders;

use App\Models\Sleeder;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SleederSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sleeder::create([
            "nama_wisata"=> "Anyaman Pandan",
            "kategori_wisata"=> "anyaman-pandan",
            "img_wisata"=> "images/img_wisata/img1.jpg",
            "deskripsi_wisata"=> " Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt
                distinctio earum repellat quaerat voluptatibus placeat nam,
                commodi optio pariatur est quia magnam eum harum corrupti dicta,
                aliquam sequi voluptate quas.",
        ]);
        Sleeder::create([
            "nama_wisata"=> "Anyaman Pandan",
            "kategori_wisata"=> "anyaman-pandan",
            "img_wisata"=> "images/img_wisata/img2.jpg",
            "deskripsi_wisata"=> " Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt
                distinctio earum repellat quaerat voluptatibus placeat nam,
                commodi optio pariatur est quia magnam eum harum corrupti dicta,
                aliquam sequi voluptate quas.",
        ]);
        Sleeder::create([
            "nama_wisata"=> "Anyaman Pandan",
            "kategori_wisata"=> "anyaman-pandan",
            "img_wisata"=> "images/img_wisata/img3.jpg",
            "deskripsi_wisata"=> " Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt
                distinctio earum repellat quaerat voluptatibus placeat nam,
                commodi optio pariatur est quia magnam eum harum corrupti dicta,
                aliquam sequi voluptate quas.",
        ]);
        Sleeder::create([
            "nama_wisata"=> "Anyaman Pandan",
            "kategori_wisata"=> "anyaman-pandan",
            "img_wisata"=> "images/img_wisata/img1.jpg",
            "deskripsi_wisata"=> " Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt
                distinctio earum repellat quaerat voluptatibus placeat nam,
                commodi optio pariatur est quia magnam eum harum corrupti dicta,
                aliquam sequi voluptate quas.",
        ]);
        Sleeder::create([
            "nama_wisata"=> "Anyaman Pandan",
            "kategori_wisata"=> "anyaman-pandan",
            "img_wisata"=> "images/img_wisata/img2.jpg",
            "deskripsi_wisata"=> " Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt
                distinctio earum repellat quaerat voluptatibus placeat nam,
                commodi optio pariatur est quia magnam eum harum corrupti dicta,
                aliquam sequi voluptate quas.",
        ]);
        Sleeder::create([
            "nama_wisata"=> "Anyaman Pandan",
            "kategori_wisata"=> "anyaman-pandan",
            "img_wisata"=> "images/img_wisata/img3.jpg",
            "deskripsi_wisata"=> " Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt
                distinctio earum repellat quaerat voluptatibus placeat nam,
                commodi optio pariatur est quia magnam eum harum corrupti dicta,
                aliquam sequi voluptate quas.",
        ]);

    }
}
