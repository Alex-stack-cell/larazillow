<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        Reservation::factory(10)->create();
//         User::factory()->create([
//             'name' => 'Test User',
//             'email' => 'test@example.com',
//             'is_admin' => true
//         ]);
//        User::factory()->create([
//            'name' => 'Test User 2',
//            'email' => 'test2@example.com',
//        ]);
//        Listing::factory(10)->create([
//            'user_id' => 1
//        ]);
//        Listing::factory(10)->create([
//            'user_id' => 2
//        ]);

    }
}
