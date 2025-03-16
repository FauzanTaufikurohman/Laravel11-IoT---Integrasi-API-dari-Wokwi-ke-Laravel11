<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransaksiSensorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('transaksi_sensor')->insert([
            [
                'nama_sensor' => 'Sensor Suhu',
                'nilai1' => rand(10, 100), // Nilai acak antara 10-100
                'nilai2' => rand(10, 100), 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_sensor' => 'Sensor Kelembaban',
                'nilai1' => rand(10, 100),
                'nilai2' => rand(10, 100),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_sensor' => 'Sensor Tekanan',
                'nilai1' => rand(10, 100),
                'nilai2' => rand(10, 100),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
