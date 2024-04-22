<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Buku;
use App\Models\Genre;

class BukuSeeder extends Seeder
{
    public function run()
    {
        $genreFantasi = Genre::where('name', 'Fantasi')->firstOrFail();
        $genreRomantis = Genre::where('name', 'Romantis')->firstOrFail();
        $genrePetualangan = Genre::where('name', 'Petualangan')->firstOrFail();
        $genreMisteri = Genre::where('name', 'Misteri')->firstOrFail();
        $genreSainsFiksi = Genre::where('name', 'Sains Fiksi')->firstOrFail();

        // Judul buku dan isi buku Indonesia
        Buku::factory()->create([
            'judul' => 'Gadis Pantai',
            'penulis' => 'Pramoedya Ananta Toer',
            'sinopsis' => 'Novel ini mengisahkan tentang kehidupan seorang gadis yang tinggal di desa pantai Jawa Timur pada masa penjajahan Belanda.',
            'harga' => 10000,
            'gambar' => 'https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1484031705i/735248.jpg',
            'genre_id' => $genreRomantis->id
        ]);

        Buku::factory()->create([
            'judul' => 'Laskar Pelangi',
            'penulis' => 'Andrea Hirata',
            'sinopsis' => 'Buku ini menceritakan tentang perjuangan sekelompok anak muda dari desa terpencil di Belitong dalam mengejar mimpi dan pendidikan mereka.',
            'harga' => 20000,
            'gambar' => 'https://cdnwpseller.gramedia.com/wp-content/uploads/2021/10/02003757/laskar-pelangi.jpg',
            'genre_id' => $genreRomantis->id
        ]);

        Buku::factory()->create([
            'judul' => 'Bumi Manusia',
            'penulis' => 'Pramoedya Ananta Toer',
            'sinopsis' => 'Novel ini mengisahkan tentang perjuangan seorang pribumi, Minke, dalam menghadapi zaman kolonial Belanda dan budaya Jawa pada awal abad ke-20.',
            'harga' => 30000,
            'gambar' => 'https://cdn.gramedia.com/uploads/items/bumi-manusia-edit.jpg',
            'genre_id' => $genreMisteri->id
        ]);

        Buku::factory()->create([
            'judul' => 'Ayat-Ayat Cinta',
            'penulis' => 'Habiburrahman El Shirazy',
            'sinopsis' => 'Buku ini mengisahkan tentang perjuangan seorang mahasiswa Indonesia di Mesir dalam menghadapi cinta dan tantangan hidup.',
            'harga' => 40000,
            'gambar' => 'https://upload.wikimedia.org/wikipedia/id/b/b4/Ayatayatcinta.jpg',
            'genre_id' => $genreRomantis->id
        ]);

        Buku::factory()->create([
            'judul' => 'Cinta di Dalam Gelas',
            'penulis' => 'Andrea Hirata',
            'sinopsis' => 'Buku ini menceritakan kisah cinta dua insan yang terpisahkan oleh waktu dan peristiwa tragis yang dialami oleh pria dalam mencari arti cinta sejati.',
            'harga' => 50000,
            'gambar' => 'https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1276569634i/8460546.jpg',
            'genre_id' => $genreRomantis->id
        ]);
    }
}
