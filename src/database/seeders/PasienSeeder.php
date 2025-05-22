<?php

namespace Database\Seeders;

use App\Models\Kunjungan;
use App\Models\Pasien;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $senin = Kunjungan::firstOrCreate([
            'hari' => 'Senin',
            'keluhan' => 'Sakit Pinggang',
        ]);

        Pasien::firstOrCreate([
            'nama' => "Robert",
            'nik' => '2342353463',
            ]);
    }
}
