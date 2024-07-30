<?php

namespace Database\Seeders;

use App\Models\Kegiatan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kegiatan::create([
            'judul' => 'Activity 1',
            'deskripsi' => 'Description for activity 1',
            'tanggal_kegiatan' => '2023-01-01',
        ]);
        Kegiatan::create([
            'judul' => 'Activity 2',
            'deskripsi' => 'Description for activity 2',
            'tanggal_kegiatan' => '2023-02-01',
        ]);
        Kegiatan::create([
            'judul' => 'Activity 3',
            'deskripsi' => 'Description for activity 3',
            'tanggal_kegiatan' => '2023-03-01',
        ]);
        Kegiatan::create([
            'judul' => 'Activity 4',
            'deskripsi' => 'Description for activity 4',
            'tanggal_kegiatan' => '2023-04-01',
        ]);
        Kegiatan::create([
            'judul' => 'Activity 5',
            'deskripsi' => 'Description for activity 5',
            'tanggal_kegiatan' => '2023-05-01',
        ]);
        Kegiatan::create([
            'judul' => 'Activity 6',
            'deskripsi' => 'Description for activity 5',
            'tanggal_kegiatan' => '2023-05-01',
        ]);
    }
}
