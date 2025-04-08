<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\DetailPeriksa;

class DetailPeriksaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DetailPeriksa::insert([
            ['id_periksa' => 1, 'id_obat' => 1],
            ['id_periksa' => 1, 'id_obat' => 2],
            ['id_periksa' => 1, 'id_obat' => 3],
            ['id_periksa' => 1, 'id_obat' => 4],
            ['id_periksa' => 1, 'id_obat' => 5],
        ]);
    }
}
