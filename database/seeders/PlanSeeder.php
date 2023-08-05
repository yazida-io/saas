<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    public function run(): void
    {
        Plan::create([
            'name' => 'Basic',
            'description' => 'Al chatbot, personalized recommendations',
            'features' => [
                '1 GB of space',
                'Support at $25/hour',
                '1 email address',
                '1 domain name',
            ],
            'color' => '-',
            'price' => 7.99,
            'stripe_price_id' => 'price_1NbSqYHq0yPLI2LZwibaQdiO',
        ]);
        Plan::create([
            'name' => 'Gold 🌟',
            'description' => 'Advanced Al chatbot, priority support, analytics dashboard',
            'features' => [
                '5 GB of space',
                'Support at $15/hour',
                '10 email addresses',
                '10 domain names',
            ],
            'color' => '#6A8E7F',
            'best_offer' => true,
            'price' => 19.99,
            'stripe_price_id' => 'price_1NbSqYHq0yPLI2LZ8JL8mi2Y',

        ]);
        Plan::create([
            'name' => 'Platinum',
            'description' => 'For a large business or organization.',
            'features' => [
                '10 GB of space',
                'Support at $5/hour',
                '100 email addresses',
                '100 domain names',
            ],
            'color' => '#f9a03f',
            'price' => 49.99,
            'stripe_price_id' => 'price_1NbSqYHq0yPLI2LZtY09yYW1',
        ]);
    }
}
