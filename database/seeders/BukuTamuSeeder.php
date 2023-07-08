<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BukuTamuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('buku_tamu')->insert([
            [
                'gb_date' => Date('Ymd'),
                'name' => 'Annisa',
                'age' => 20,
            ],
            [
                'gb_date' => Date('Ymd'),
                'name' => 'Hayva',
                'age' => 22,
            ],
            [
                'gb_date' => Date('Ymd'),
                'name' => 'Erda',
                'age' => 18,
            ],
        ]);
    }
}
