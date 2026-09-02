<?php

namespace Database\Seeders;

use App\Models\Client;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Client::create([
            'name' => 'Ecom Growth Partners',
            'industry' => 'marketing_advertising',
            'website' => 'https://www.ecomgrowthpartners.com/',
            'country' => 'Spain',
            'city' => 'Madrid',
            'logo_path' => 'logos/egp.jpg',
            'contact_name' => 'Carlos Higuera',
            'email' => 'carlos@ecomgrowthpartners.com',
            'job_title' => 'cmo',
            'client_status' => 'active',
            'start_date' => Carbon::now(),
            'currency' => 'EUR',
            'monthly_budget' => 40.000,
            'advertising_platforms' => 'meta'
        ]);
    }
}
