<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DownloadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('download')->insert([
            [
                'title' => 'HASIL SURVEY KEPUASAN MASYARAKAT TERHADAP PUSKESMAS SELALU SEHAT 2021',
                'file' => 'file1.pdf'
            ],
            [
                'title' => 'HASIL SURVEY KEPUASAN MASYARAKAT TERHADAP PUSKESMAS SELALU SEHAT 2022',
                'file' => 'file2.pdf'
            ],
            [
                'title' => 'HASIL SURVEY KEPUASAN MASYARAKAT TERHADAP PUSKESMAS SELALU SEHAT 2023',
                'file' => 'file3.pdf'
            ]
        ]);
    }
}
