<?php

namespace Database\Seeders;

use App\Models\Periode;
use Illuminate\Database\Seeder;

class PeriodeSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'periode' => 'GANJIL 2025/2026',
                'singkatan' => '251',
            ],
            [
                'periode' => 'GENAP 2025/2026',
                'singkatan' => '252',
            ],
            [
                'periode' => 'GANJIL 2026/2027',
                'singkatan' => '261',
            ],
            [
                'periode' => 'GENAP 2026/2027',
                'singkatan' => '262',
            ],
        ];

        foreach ($data as $item) {
            Periode::firstOrCreate(
                ['singkatan' => $item['singkatan']],
                [
                    'periode' => $item['periode'],
                    'status' => false,
                ]
            );
        }
    }
}