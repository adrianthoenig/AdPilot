<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\RandomClientSeeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed Clients
        DB::table('clients')->truncate();
        $this->call(ClientSeeder::class); // speciifc client
        $this->call(RandomClientSeeder::class); // fake clients
    }
}
