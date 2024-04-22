<?php

namespace Database\Factories;

use App\Models\Buku;
use Illuminate\Database\Eloquent\Factories\Factory;

class BukuFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Buku::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [];
    }

    /**
     * Indicate that the book should be predefined.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function predefined($judul, $penulis, $sinopsis, $harga, $gambar, $genre_id)
    {
        return $this->state(function (array $attributes) use ($judul, $penulis, $sinopsis, $harga, $gambar, $genre_id) {
            return [
                'judul' => $judul,
                'penulis' => $penulis,
                'sinopsis' => $sinopsis,
                'harga' => $harga,
                'gambar' => $gambar,
                'genre_id' => $genre_id,
            ];
        });
    }
}