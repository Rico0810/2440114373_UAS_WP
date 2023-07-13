<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Mahasiswa::insert([
            'nama' => 'Green Latte Frappucino',
            'price' => 'Rp 30.000',
            //'grade' => 98,
            'matakuliah_id' => 1
        ]);

        Mahasiswa::insert([
            'nama' => 'Americano Express',
            'price' => 'Rp 50.000',
            //'grade' => 80,
            'matakuliah_id' => 3
        ]);

        Mahasiswa::insert([
            'nama' => 'Gugudan Coffee',
            'price' => 'Rp 100.000',
            //'grade' => 70,
            'matakuliah_id' => 2
        ]);

        Mahasiswa::insert([
            'nama' => 'Kapal Api',
            'price' => 'Rp 98.000',
            //'grade' => 100,
            'matakuliah_id' => 4
        ]);
    }
}
