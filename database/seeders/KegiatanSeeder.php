<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kegiatan')->insert([
            [
                'thumbnail' => 'kegiatan1.jpg',
                'title' => 'Survey Kualitas Air Minum',
                'description' => 'Kegiatan 1 Description',
            ],
            [
                'thumbnail' => 'kegiatan2.jpg',
                'title' => 'Kebersihan Lingkungan',
                'description' => 'Kegiatan 2 Description',
            ],
            [
                'thumbnail' => 'kegiatan3.jpg',
                'title' => 'Penyehatan Lingkungan',
                'description' => 'Kegiatan 3 Description',
            ],
            [
                'thumbnail' => 'kegiatan4.jpg',
                'title' => 'Cek Karakteristik Limbah Buangan',
                'description' => 'Kegiatan 4 Description',
            ],
            [
                'thumbnail' => 'kegiatan5.jpg',
                'title' => 'Cek Standar Sanitasi dan Kesehatan Lingkungan Pasar',
                'description' => 'Kegiatan 5 Description',
            ],
            [
                'thumbnail' => 'kegiatan6.jpg',
                'title' => 'Inspeksi Sanitasi Pengolahan Makanan',
                'description' => 'Kegiatan 6 Description',
            ],
        ]);
    }
}
