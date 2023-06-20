<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TitikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("titik")->insert([
            [
                "nama" => "kankab",
                "latitude" => -8.129611804635445,
                "longitude" => 112.21355520377313,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "nama" => "Taman",
                "latitude" => -8.130942560116807,
                "longitude" => 112.21886613758068,
                "created_at" => now(),
                "updated_at" => now(),
            ],
        ]
        );
    }
}
