<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Periksa;
use Illuminate\Support\Carbon;

class PeriksaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Periksa::create([
            'id_pasien' => 2,
            'id_dokter' => 1,
            'tgl_periksa' => Carbon::now(),
            'catatan' => 'Pasien mengalami demam tinggi dan batuk',
            'biaya_periksa' => 150000,
        ]);
    }
}
