<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Anggota;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Anggota::factory(10)->create();

        Anggota::create([
            'nama' => 'Iqbal',
            'no_hp' => '08123456789'
        ]);

        Anggota::create([
            'nama' => 'Alif',
            'no_hp' => '08888888888'
        ]);
    }
}
