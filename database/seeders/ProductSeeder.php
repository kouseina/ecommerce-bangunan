<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::insert([
            [
                'kode_barang' => 'BRG-001',
                'nama_barang' => 'Semen Portland',
                'kategori' => 'Semen',
                'stok_tersedia' => 100,
                'harga_satuan' => 50000.00,
                'satuan' => 'Sak',
            ],
            [
                'kode_barang' => 'BRG-002',
                'nama_barang' => 'Cat Tembok',
                'kategori' => 'Cat',
                'stok_tersedia' => 50,
                'harga_satuan' => 75000.00,
                'satuan' => 'Kaleng',
            ],
            [
                'kode_barang' => 'BRG-003',
                'nama_barang' => 'Besi Beton',
                'kategori' => 'Besi',
                'stok_tersedia' => 200,
                'harga_satuan' => 150000.00,
                'satuan' => 'Batang',
            ],
        ]);
    }
}
