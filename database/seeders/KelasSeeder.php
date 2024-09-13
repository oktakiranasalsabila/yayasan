<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kelas;
class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kelas::create([
            'kelas' => 'Pejuang Subuh 1'
        ]);
        Kelas::create([
            'kelas' => 'Pejuang Subuh 2'
        ]);
        Kelas::create([
            'kelas' => 'Pejuang Subuh 3'
        ]);
    }
}
