<?php

namespace Database\Seeders;

use App\Models\MataKuliah;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        MataKuliah::insert([
            'mata_kuliah' => 'Coffee Latte'
        ]);

        MataKuliah::insert([
            'mata_kuliah' => 'Americano'
        ]);

        MataKuliah::insert([
            'mata_kuliah' => 'Cappucino'
        ]);

        MataKuliah::insert([
            'mata_kuliah' => 'Moccachino'
        ]);

        MataKuliah::insert([
            'mata_kuliah' => 'Espresso'
        ]);

        MataKuliah::insert([
            'mata_kuliah' => 'Machiato'
        ]);
    }
}
