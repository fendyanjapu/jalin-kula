<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::create([
            'username' => 'admin',
            'password' => bcrypt('jalinkula123!'),
            'level'=> '1',
            'ket'=> 'Admin / Kasubgag',
        ]);

        \App\Models\User::create([
            'username' => 'sekda',
            'password' => bcrypt('jalinkula123!'),
            'level'=> '2',
            'ket'=> 'Sekda',
        ]);

        \App\Models\User::create([
            'username' => 'bupati',
            'password' => bcrypt('jalinkula123!'),
            'level'=> '3',
            'ket'=> 'Bupati',
        ]);
    }
}
