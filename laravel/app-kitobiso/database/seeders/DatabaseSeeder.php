<?php

namespace Database\Seeders;

use App\Models\Donation;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory(10)->create([
            'title' => 'Bantuan Kemanusiaan',
            'des' => 'Bantuan untuk korban bencana alam',
            'image' => 'bantuan-kemanusian.jpg',
            'progress' => '0',
            'duration' => '1 bulan',
            'collected' => 0,
            'target' => 1000000,
            'user_id' => 1,
        ]);

        Donation::create(attributes:[
            'amount' => 100000,
            'funding_id' => 1,
            'user_id' => 2,
        ]);
    }
}