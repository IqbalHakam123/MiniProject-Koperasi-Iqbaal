<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barangs')->insert([
            [
                'kode_barang' => 'GA-123',
                'nama_barang' => 'Galon',
                'harga_barang'=> 20000,
                'deskripsi' => 'Galon Cleo 18L',
                'satuan_id' => 1
            ],
            [
                'kode_barang' => 'KE-345',
                'nama_barang' => 'Kertas',
                'harga_barang'=> 15000,
                'deskripsi' => 'Kertas A4 Sidu',
                'satuan_id' => 2
            ],
            [
                'kode_barang' => 'TE-567',
                'nama_barang' => 'Telur',
                'harga_barang'=> 30000,
                'deskripsi' => 'Telur 1 Kg',
                'satuan_id' => 3
            ],
        ]);

    }
}
