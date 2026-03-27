<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Quote;

class QuoteSeeder extends Seeder
{
    public function run(): void
    {
        Quote::create([
            'client_name' => 'Ion Popescu',
            'car_plate' => 'B123XYZ',
            'insurer_name' => 'AsiguratorX',
            'price' => 545.50,
        ]);

        Quote::create([
            'client_name' => 'Maria Ionescu',
            'car_plate' => 'CJ45ABC',
            'insurer_name' => 'AsiguratorY',
            'price' => 480.00,
        ]);
    }
}
