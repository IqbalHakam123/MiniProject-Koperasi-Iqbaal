<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SatuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('satuans')->insert([
            [
                'kode_satuan' => 'BU',
                'nama_satuan' => 'Buah'
            ],
            [
                'kode_satuan' => 'LE',
                'nama_satuan' => 'Lembar'
            ],
            [
                'kode_satuan' => 'KG',
                'nama_satuan' => 'Kilogram'
            ],
        ]);
    }
}
