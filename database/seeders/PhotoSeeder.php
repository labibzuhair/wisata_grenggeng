<?php

namespace Database\Seeders;

use App\Models\Photo;
use App\Models\Gallery;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $gallery = Gallery::create(['name' => 'Contoh Kegiatan']);

        Photo::create(['gallery_id' => $gallery->id, 'image' => 'images/img_wisata/img1.jpg', 'is_main' => true]);
        Photo::create(['gallery_id' => $gallery->id, 'image' => 'images/img_wisata/img2.jpg']);
        Photo::create(['gallery_id' => $gallery->id, 'image' => 'images/img_wisata/img2.jpg', 'is_main' => true]);
        Photo::create(['gallery_id' => $gallery->id, 'image' => 'images/img_wisata/img1.jpg']);
        Photo::create(['gallery_id' => $gallery->id, 'image' => 'images/img_wisata/img3.jpg', 'is_main' => true]);
        Photo::create(['gallery_id' => $gallery->id, 'image' => 'images/img_wisata/img2.jpg']);
    }

}
