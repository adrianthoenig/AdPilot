<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->company(),
            'industry' => fake()->randomElement([
                'automotive',
                'beauty',
                'construction_real_estate',
                'consulting',
                'education',
                'ecommerce',
                'fashion',
                'finance',
                'fitness',
                'food',
                'healthcare',
                'home_interior',
                'hospitality_travel',
                'legal_services',
                'manufacturing',
                'marketing_advertising',
                'media_entertainment',
                'nonprofit',
                'pet_care',
                'professional_services',
                'restaurants_cafes',
                'saas_tech',
                'sports',
                'telecommunications',
                'other'
            ]),
            'website' => fake()->url(),
            'country' => fake()->country(),
            'city' => fake()->city(),
            'logo_path' => fake()->image(width: 12, height: 12, category: 'business'),
            'contact_name' => fake()->name(),
            'email' => fake()->safeEmail(),
            'phone' => fake()->phoneNumber(),
            'job_title' => fake()->randomElement([
                'ceo',
                'founder',
                'co-founder',
                'owner',
                'cmo',
                'marketing_manager',
                'paid_media_manager',
                'social_media_manager',
                'brand_manager',
                'sales_manager',
                'product_manager',
                'creative_director',
                'other'
            ]),
            'client_status' => fake()->randomElement([
                'onboarding',
                'active',
                'paused',
                'draft'
            ]),
            'start_date' => fake()->date(),
            'currency' => fake()->randomElement([
                'USD',
                'EUR',
                'GBP',
                'CHF',
                'IRR',
                'CAD',
                'AUD',
                'NZD',
                'JPY',
                'CNY',
                'INR',
                'SGD',
                'HKD',
                'AED',
                'SAR',
                'SEK',
                'NOK',
                'DKK',
                'MXN',
                'BRL',
                'PLN'
            ]),
            'monthly_budget' => fake()->randomDigit(),
            'advertising_platforms' => fake()->randomElement([
                'meta',
                'google',
                'tiktok',
                'linkedin'
            ])
        ];
    }
}
