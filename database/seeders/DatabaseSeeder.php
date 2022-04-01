<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Kamar;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();
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
