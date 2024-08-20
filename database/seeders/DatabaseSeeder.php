<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\AdminSeeder;
use Database\Seeders\ProdukSeeder;
use Database\Seeders\SleederSeeder;
use Database\Seeders\KegiatanSeeder;
use Database\Seeders\ProdukTTGSeeders;
use Database\Seeders\ProdukMakananSeeders;
use Database\Seeders\ProdukTerbaikSeeders;
use Database\Seeders\ProdukAnyamanSleeders;
use Database\Seeders\PaketWisataEdukasiSeeders;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        $this->call(KegiatanSeeder::class);
        $this->call(ProdukSeeder::class);
        $this->call(SleederSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(ProdukAnyamanSleeders::class);
        $this->call(ProdukTTGSeeders::class);
        $this->call(ProdukMakananSeeders::class);
        $this->call(ProdukTerbaikSeeders::class);
        $this->call(PaketWisataEdukasiSeeders::class);
    }
}
