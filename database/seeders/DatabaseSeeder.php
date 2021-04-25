<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(50)->create();
        
        DB::table('users')->insert([
            'name' => 'nudi',
            'email' => 'nudi10@gmx.at',
            'password' => '$2y$10$NFunErmOiVZcUZ.ocNJfxOzYDJg5H.6m1xc01BPvBNDyVVUcO2hPS',
            'race' => 'Zerg',
            'wins' => 12,
            'loss' => 2,
        ]);
        DB::table('users')->insert([
            'name' => 'nudi2',
            'email' => 'nudi11@gmx.at',
            'password' => '$2y$10$NFunErmOiVZcUZ.ocNJfxOzYDJg5H.6m1xc01BPvBNDyVVUcO2hPS',
            'race' => 'Protoss',
            'wins' => 10,
            'loss' => 1,
        ]);
        DB::table('users')->insert([
            'name' => 'nudi3',
            'email' => 'nudi12@gmx.at',
            'password' => '$2y$10$NFunErmOiVZcUZ.ocNJfxOzYDJg5H.6m1xc01BPvBNDyVVUcO2hPS',
            'race' => 'Terran',
            'wins' => 20,
            'loss' => 200,
        ]); 
       
    }
}
