<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Gallery::create(['name' => 'Kegiatan 1']);
        Gallery::create(['name' => 'Kegiatan 2']);
        Gallery::create(['name' => 'Kegiatan 3']);

    }
}
