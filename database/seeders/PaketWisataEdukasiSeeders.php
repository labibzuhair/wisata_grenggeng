<?php

namespace Database\Seeders;

use App\Models\PaketWisataEdukasi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaketWisataEdukasiSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PaketWisataEdukasi::create([
            'nama' => 'Paket Little Star',
            'target' => 'PAUD & TK',
            'harga' => 'Rp. 20.000/peserta',
            'benefit' => '<ol>
                                                <li>Aula Pelatihan</li>
                                                <li>Bunda Tutor Interaktif</li>
                                                <li>Snack & Air Mineral</li>
                                                <li>Bahan Materi Ajar</li>
                                                <li>Souvenir Little Star & Foto (@ 1pcs)</li>
                                            </ol>',
            'durasi' => '3 Jam',
            'lokasi' => 'Sekertariat KTH Margo Rahayu',
        ]);
        PaketWisataEdukasi::create([
            'nama' => 'Paket Now I Know',
            'target' => 'SEKOLAH DASAR',
            'harga' => 'Rp. 30.000/peserta',
            'benefit' => '<ol>
                                                <li>Aula Pelatihan</li>
                                                <li>Rumah Pelatihan</li>
                                                <li>Explore Kebun Pandan</li>
                                                <li>Tutor Interaktif</li>
                                                <li>Safety Gloves </li>
                                                <li>Snack & Air Mineral</li>
                                                <li>Bahan Materi Ajar</li>
                                                <li>Souvenir Little Star & Foto (@ 1pcs)</li>
                                            </ol>',
            'durasi' => '3 Jam',
            'lokasi' => '<ol>
                                                <li>Sekertariat KTH Margo Rahayu</li>
                                                <li>Rumah Pelatihan</li>
                                                <li>Kebun Pandan</li>

                                            </ol>',
        ]);
        PaketWisataEdukasi::create([
            'nama' => 'Paket Young Star',
            'target' => 'SLTP & SLTA',
            'harga' => 'Rp. 20.000/peserta',
            'benefit' => '<ol>
                                                <li>Aula Pelatihan</li>
                                                <li>Tutor Interaktif</li>
                                                <li>Snack & Air Mineral</li>
                                                <li>Bahan Materi Ajar</li>
                                                <li>Souvenir Little Star & Foto (@ 1pcs)</li>
                                            </ol>',
            'durasi' => '3 Jam',
            'lokasi' => 'Sekertariat KTH Margo Rahayu',
        ]);
        PaketWisataEdukasi::create([
            'nama' => 'Paket Explorrer',
            'target' => 'PELAJAR & UMUM',
            'harga' => 'Rp. 45.000/peserta',
            'benefit' => '<ol>
                                                <li>Aula Pelatihan</li>
                                                <li>Rumah Pelatihan</li>
                                                <li>Explore Kebun Pandan</li>
                                                <li>Tutor Interaktif</li>
                                                <li>Safety Gloves </li>
                                                <li>Snack & Air Mineral</li>
                                                <li>Bahan Materi Ajar</li>
                                                <li>Souvenir Little Star & Foto (@ 1pcs)</li>
                                            </ol>',
            'durasi' => 'Max 6 Jam (Termasuk Ishoma)',
            'lokasi' => '<ol>
                                                <li>Sekertariat KTH Margo Rahayu</li>
                                                <li>Rumah Pelatihan</li>
                                                <li>Kebun Pandan</li>
                                            </ol>',
        ]);
        PaketWisataEdukasi::create([
            'nama' => 'Paket Interviewer',
            'target' => 'PELAJAR MAHASISWA UMUM',
            'harga' => 'Rp. 20.000/peserta',
            'benefit' => '<ol>
                                                <li>Aula Pelatihan</li>
                                                <li>Tutor Interaktif</li>
                                                <li>Snack & Air Mineral</li>
                                                <li>Bahan Materi Ajar</li>
                                                <li>Souvenir Little Star & Foto (@ 1pcs)</li>
                                            </ol>',
            'durasi' => '3 Jam',
            'lokasi' => 'Sekertariat KTH Margo Rahayu',
        ]);
        PaketWisataEdukasi::create([
            'nama' => 'International Tour Packages',
            'target' => 'FOREIGN TOURISTS',
            'harga' => 'Rp. 85.000/participant',
            'benefit' => '<ol>
                                                <li>Hall</li>
                                                <li>Educational Tourism House</li>
                                                <li>Pandanus Garden Exploration</li>
                                                <li>Interactive Tutors</li>
                                                <li>Interactive Guides </li>
                                                <li>Safety Gloves</li>
                                                <li>Lunch & Snack (Local Menu)</li>
                                                <li>Training Materials</li>
                                                <li>Souvenir & Photo (1 pcs / tourist)</li>
                                            </ol>',
            'durasi' => '3 hours educational tourism',
            'lokasi' => '<ol>
                                                <li>KTH Margo Rahayu Secretariat</li>
                                                <li>Educational Tourism House</li>
                                                <li>Pandanus Garden</li>
                                            </ol>',
        ]);



    }
}
