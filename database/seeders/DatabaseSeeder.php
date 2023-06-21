<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\User;
use App\Models\Menu;
use App\Models\Promo;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::create(
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'is_admin' => 1,
                'password' => bcrypt('12345')
            ]
        );

        Category::create(
            [
                'nama_kategori' => 'Sushi'
            ]
        );

        Category::create(
            [
                'nama_kategori' => 'Ramen'
            ]
        );

        Category::create(
            [
                'nama_kategori' => 'Udon'
            ]
        );

        Category::create(
            [
                'nama_kategori' => 'Donburi'
            ]
        );

        Category::create(
            [
                'nama_kategori' => 'Yakiniku'
            ]
        );

        Category::create(
            [
                'nama_kategori' => 'Minuman'
            ]
        );

        Menu::create(
            [
                'nama' => 'Sushi 1',
                'deskripsi' => 'Sushi Enak',
                'id_kategori' => 1,
                'harga' => 10000,
            ]
        );

        Promo::create(
            [
                'judul' => 'Promo Merdeka',
                'deskripsi' => 'BUY 1 GET 1 FREE - Pembelian Kawaii Package Dapatkan Chicken Katsu Curry Rice.',
                'awal_promo' => '2023-05-02',
                'akhir_promo' => '2023-05-19',
            ]
        );
    }
}