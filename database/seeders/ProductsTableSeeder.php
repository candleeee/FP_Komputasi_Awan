<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->insert([
            [
                'id' => 1,
                'nama_produk' => 'Aghnia A Pleats Skirt 💫',
                'harga_produk' => 105000.00,
                'stok_produk' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'nama_produk' => 'Pleats Shawl🦪',
                'harga_produk' => 48000.00,
                'stok_produk' => 100,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan produk lainnya di sini...
        ]);
    }
}

