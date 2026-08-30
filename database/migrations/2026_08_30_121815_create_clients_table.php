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
                'Ecommerce',
                'Marketing',
                'Software'
            ])->nullable();

            $table->string('website')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('logo_path')->nullable();

            $table->string('primary_contact_name');
            $table->string('email')->unique();
            $table->string('phone')->nullable();

            $table->enum('job_title', [
                'ceo',
                'cmo'
            ]);

            $table->enum('status', [
                'onboarding',
                'active',
                'paused',
                'draft'
            ]);

            $table->date('start_date')->nullable();
            $table->enum('currency', [
                'eur',
                'gbp',
                'usd'
            ]);

            $table->decimal('monthly_budget', 9, 3)->nullable();

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
