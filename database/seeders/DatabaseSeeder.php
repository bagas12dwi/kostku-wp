<?php

namespace Database\Seeders;

use App\Models\Alternative;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Alternative::create([
            'alternatif' => 'Kost Karah Tama Asri',
            'harga' => 500000,
            'jarak' => 1,
            'fasilitas' => 3,
            'luas' => 1,
            'image' => 'img-kost1.jpeg'
        ]);
        Alternative::create([
            'alternatif' => 'Kost Ketintang Baru',
            'harga' => 750000,
            'jarak' => 0.5,
            'fasilitas' => 2,
            'luas' => 3,
            'image' => 'img-kost2.jpeg'
        ]);
        Alternative::create([
            'alternatif' => 'Kost Bapak Ali',
            'harga' => 600000,
            'jarak' => 2,
            'fasilitas' => 5,
            'luas' => 2,
            'image' => 'img-kost3.jpeg'
        ]);
        Alternative::create([
            'alternatif' => 'Kost Putri Melati',
            'harga' => 1000000,
            'jarak' => 3.2,
            'fasilitas' => 4,
            'luas' => 2,
            'image' => 'img-kost4.jpeg'
        ]);
        Alternative::create([
            'alternatif' => 'Kost Putri Anggrek',
            'harga' => 1200000,
            'jarak' => 2.1,
            'fasilitas' => 5,
            'luas' => 2,
            'image' => 'img-kost5.jpeg'
        ]);
        Alternative::create([
            'alternatif' => 'Kost Pak Mukmin',
            'harga' => 300000,
            'jarak' => 0.3,
            'fasilitas' => 1,
            'luas' => 1,
            'image' => 'img-kost6.jpeg'
        ]);
    }
}
