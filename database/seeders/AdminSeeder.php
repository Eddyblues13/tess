<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        // firstOrCreate keeps re-seeding safe: the email column is unique,
        // so a plain create() would throw on the second run.
        Admin::firstOrCreate(
            ['email' => 'admin@mail.com'],
            [
                'name' => 'Super Admin',
                'type' => 'superadmin',
                'password' => Hash::make('12345678'), // use a strong password in production
            ]
        );
    }
}
