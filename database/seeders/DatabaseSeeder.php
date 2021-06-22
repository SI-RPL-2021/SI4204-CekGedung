<?php

namespace Database\Seeders;

use App\Models\ImageBuilding;
use Illuminate\Database\Seeder;
use App\Models\Room;
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
        DB::table('users')->insert([ 
            'id' => '1',
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin12345'),
            'role' => 'admin',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // \App\Models\User::factory(10)->create();
        \App\Models\Building::factory(10)
        ->has(
            Room::factory()
            ->count(10)
        )
        ->has(
            ImageBuilding::factory()->count(4), 'images'
        )
        ->create();
    }
}