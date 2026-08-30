<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();

            $table->string('name');

            $table->enum('industry', [
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
            ]);

            $table->string('website')->nullable();

            $table->string('country')->nullable();

            $table->string('city')->nullable();

            $table->string('logo_path')->nullable();

            $table->string('contact_name');

            $table->string('email')->unique();

            $table->string('phone')->nullable();

            $table->enum('job_title', [
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
            ])->nullable();

            $table->enum('client_status', [
                'onboarding',
                'active',
                'paused',
                'draft'
            ]);

            $table->date('start_date')->nullable();

            $table->enum('currency', [
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
            ]);

            $table->decimal('monthly_budget', 10, 2)->nullable();

            $table->enum('advertising_platforms', [
                'meta',
                'google',
                'tiktok',
                'linkedin'
            ])->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
