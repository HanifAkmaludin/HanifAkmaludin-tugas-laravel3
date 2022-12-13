<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Pengguna;
use Illuminate\Database\Seeder;

class PenggunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pengguna::query()->create([
            "nama" => "Hanif Akmaludin",
            "username" => "Hnfff_a",
            "email" => "hanif.akmaludin12@gmail.com",
            "password" => "hanif123454321"
        ]);
    }
}
