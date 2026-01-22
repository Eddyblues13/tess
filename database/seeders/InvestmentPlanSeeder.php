<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\InvestmentPlan;

class InvestmentPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $plans = [
            [
                'name' => 'Tesla Growth Fund',
                'slug' => 'tesla-growth-fund',
                'category' => 'Growth',
                'strategy' => 'Tesla-Focused',
                'risk_level' => 'High',
                'nav' => 35.5000,
                'one_year_return' => 9.23,
                'min_investment' => 100.00,
                'is_featured' => true,
                'display_order' => 1,
            ],
            [
                'name' => 'Sustainable Energy ETF',
                'slug' => 'sustainable-energy-etf',
                'category' => 'ESG',
                'strategy' => 'ESG',
                'risk_level' => 'Medium',
                'nav' => 18.7500,
                'one_year_return' => 0.00,
                'min_investment' => 50.00,
                'is_featured' => true,
                'display_order' => 2,
            ],
            [
                'name' => 'Aggressive Growth Fund',
                'slug' => 'aggressive-growth-fund',
                'category' => 'Growth',
                'strategy' => 'Growth',
                'risk_level' => 'High',
                'nav' => 32.4000,
                'one_year_return' => 0.00,
                'min_investment' => 200.00,
                'is_featured' => true,
                'display_order' => 3,
            ],
            [
                'name' => 'Conservative Bond Fund',
                'slug' => 'conservative-bond-fund',
                'category' => 'Conservative',
                'strategy' => 'Conservative Bond',
                'risk_level' => 'Low',
                'nav' => 10.4500,
                'one_year_return' => 0.00,
                'min_investment' => 750.00,
                'is_featured' => false,
                'display_order' => 4,
            ],
            [
                'name' => 'Conservative Income Fund',
                'slug' => 'conservative-income-fund',
                'category' => 'Income',
                'strategy' => 'Income',
                'risk_level' => 'Low',
                'nav' => 12.8000,
                'one_year_return' => 0.00,
                'min_investment' => 500.00,
                'is_featured' => false,
                'display_order' => 5,
            ],
            [
                'name' => 'Dividend Income Fund',
                'slug' => 'dividend-income-fund',
                'category' => 'Income',
                'strategy' => 'Dividend Income',
                'risk_level' => 'Medium',
                'nav' => 14.6000,
                'one_year_return' => 0.00,
                'min_investment' => 1000.00,
                'is_featured' => false,
                'display_order' => 6,
            ],
            [
                'name' => 'ESG Balanced Fund',
                'slug' => 'esg-balanced-fund',
                'category' => 'Balanced',
                'strategy' => 'ESG Balanced',
                'risk_level' => 'Medium',
                'nav' => 22.1500,
                'one_year_return' => 0.00,
                'min_investment' => 150.00,
                'is_featured' => false,
                'display_order' => 7,
            ],
            [
                'name' => 'Global Growth Fund',
                'slug' => 'global-growth-fund',
                'category' => 'Growth',
                'strategy' => 'Global Growth',
                'risk_level' => 'Medium',
                'nav' => 19.8000,
                'one_year_return' => 0.00,
                'min_investment' => 400.00,
                'is_featured' => false,
                'display_order' => 8,
            ],
            [
                'name' => 'Sustainable Energy ETF',
                'slug' => 'sustainable-energy-etf-list',
                'category' => 'ESG',
                'strategy' => 'ESG',
                'risk_level' => 'Medium',
                'nav' => 18.7500,
                'one_year_return' => 0.00,
                'min_investment' => 50.00,
                'is_featured' => false,
                'display_order' => 9,
            ],
            [
                'name' => 'Tesla Retirement Fund',
                'slug' => 'tesla-retirement-fund',
                'category' => 'Conservative',
                'strategy' => 'Retirement',
                'risk_level' => 'Low',
                'nav' => 15.2000,
                'one_year_return' => 0.00,
                'min_investment' => 300.00,
                'is_featured' => false,
                'display_order' => 10,
            ],
        ];

        foreach ($plans as $plan) {
            InvestmentPlan::updateOrCreate(
                ['slug' => $plan['slug']],
                $plan
            );
        }
    }
}

