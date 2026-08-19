<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * These columns are also defined in the `create_investment_plans_table`
     * migration, so on a fresh install they already exist by the time this
     * runs. They are kept here for databases created before that migration
     * was updated, hence the hasColumn() guards.
     */
    public function up(): void
    {
        Schema::table('investment_plans', function (Blueprint $table) {
            if (! Schema::hasColumn('investment_plans', 'max_investment')) {
                $table->decimal('max_investment', 16, 2)->nullable()->after('min_investment');
            }

            if (! Schema::hasColumn('investment_plans', 'profit_margin')) {
                $table->decimal('profit_margin', 6, 2)->default(0)->after('max_investment');
            }

            if (! Schema::hasColumn('investment_plans', 'duration_days')) {
                $table->unsignedInteger('duration_days')->default(0)->after('profit_margin');
            }

            if (! Schema::hasColumn('investment_plans', 'duration_label')) {
                $table->string('duration_label', 64)->nullable()->after('duration_days');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('investment_plans', function (Blueprint $table) {
            $columns = array_filter(
                ['max_investment', 'profit_margin', 'duration_days', 'duration_label'],
                fn ($column) => Schema::hasColumn('investment_plans', $column)
            );

            if ($columns !== []) {
                $table->dropColumn(array_values($columns));
            }
        });
    }
};
