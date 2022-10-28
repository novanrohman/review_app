<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvent;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews') -> insert(
            [
                [
                    'nmBarang' => 'Logitech MX7',
                    'harga' => '270000',
                    'size' => '12',
                    'reviewBarang' => 'Barang ori, kualitas baik dan pengiriman cepat. Packaging rapi',
                ],
                [
                    'nmBarang' => 'Key Chron MX',
                    'harga' => '1200000',
                    'size' => 'Full',
                    'reviewBarang' => 'Keyboard bagus, kualitas sesuai harga',
                ],
                [
                    'nmBarang' => 'Epson L110',
                    'harga' => '4500000',
                    'size' => 'Mini',
                    'reviewBarang' => 'Qualitas print bagus, hanya perlu penyesuaian sebentar',
                ],
                [
                    'nmBarang' => 'KeyChron KEY2',
                    'harga' => '3200000',
                    'size' => 'Full',
                    'reviewBarang' => 'Muantep betul',
                ],
            ]
        );
    }
}
