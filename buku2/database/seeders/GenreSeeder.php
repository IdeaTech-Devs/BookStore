<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Genre::factory()->predefined('Fantasi', 'Buku-buku dengan cerita-cerita yang mengandung unsur-unsur khayalan dan imajinasi')->create();
        Genre::factory()->predefined('Romantis', 'Buku-buku yang menyoroti kisah cinta dan hubungan antar karakter')->create();
        Genre::factory()->predefined('Petualangan', 'Buku-buku yang mengisahkan perjalanan dan pengalaman seru dari tokoh utama')->create();
        Genre::factory()->predefined('Misteri', 'Buku-buku dengan cerita-cerita yang penuh teka-teki dan rahasia yang harus dipecahkan')->create();
        Genre::factory()->predefined('Sains Fiksi', 'Buku-buku yang membahas teknologi, kehidupan di luar angkasa, atau ilmu pengetahuan dalam bentuk yang diimajinasikan')->create();
    }
}