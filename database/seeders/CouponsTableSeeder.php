<?php

namespace Database\Seeders;

use App\Models\Coupon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CouponsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Coupon::create([
            'code' => 'ABC123',
            'type' => 'fixed',
        ]);

        Coupon::create([
            'code' => 'DEF456',
            'type' => 'percent',
        ]);
    }
}
