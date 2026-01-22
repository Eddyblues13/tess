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
        Schema::create('investment_plans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('category'); // Growth, Income, ESG, etc.
            $table->string('strategy'); // Tesla-Focused, Conservative, etc.
            $table->string('risk_level'); // High, Medium, Low
            $table->decimal('nav', 10, 4);
            $table->decimal('one_year_return', 6, 2); // percentage value, e.g. 9.23
            $table->decimal('min_investment', 12, 2);
            $table->boolean('is_featured')->default(false);
            $table->unsignedInteger('display_order')->default(0);
            $table->timestamps();

            $table->index('display_order');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('investment_plans');
    }
};

