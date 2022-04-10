<?php

namespace Database\Seeders;

use App\Models\Kamar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Kamar::create([
            'jenis_kamar' => 'Suite'
        ]);

        Kamar::create([
            'jenis_kamar' => 'Reguler'
        ]);

        Kamar::create([
            'jenis_kamar' => 'Family'
        ]);
    }
}
