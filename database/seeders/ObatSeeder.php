<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Obat;

class ObatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Obat::insert([
            ['nama_obat' => 'Paracetamol', 'kemasan' => 'Tablet', 'harga' => 5000],
            ['nama_obat' => 'Amoxicillin', 'kemasan' => 'Kapsul', 'harga' => 10000],
            ['nama_obat' => 'Ibuprofen', 'kemasan' => 'Tablet', 'harga' => 7000],
            ['nama_obat' => 'Cetirizine', 'kemasan' => 'Tablet', 'harga' => 8000],
            ['nama_obat' => 'Omeprazole', 'kemasan' => 'Kapsul', 'harga' => 12000],
        ]);
    }
}
