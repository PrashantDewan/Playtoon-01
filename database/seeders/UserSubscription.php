<?php

namespace Database\Seeders;

use App\Models\SubscriptionPlan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class UserSubscription extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $plans = [
            [
                'name' => 'Basic Plan',
                'description' => 'Basic subscription plan',
                'price' => 9.99,
                'currency' => '$',
                'trial_period_days' => 30,
                'status' => 'active',
            ],
            [
                'name' => 'Premium Plan',
                'description' => 'Premium subscription plan',
                'price' => 19.99,
                'currency' => '$',
                'trial_period_days' => 30,
                'status' => 'active',
            ],
            [
                'name' => 'Pro Plan',
                'description' => 'Pro subscription plan',
                'price' => 29.99,
                'currency' => '$',
                'trial_period_days' => 30,
                'status' => 'inactive',
            ],
        ];

        foreach ($plans as $plan) {
            SubscriptionPlan::create($plan);
        }

        $subscriptions = [
            [
                'user_id' => 1,
                'is_active' => 1,
                'start_date' => Carbon::now(),
                'end_date' => Carbon::now()->addDays(7),
                'subscription_plan_id' => 1,
                'payment_type' => 'Credit Card',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 2,
                'is_active' => 1,
                'start_date' => Carbon::now(),
                'end_date' => Carbon::now()->addDays(30),
                'subscription_plan_id' => 2,
                'payment_type' => 'PayPal',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            // Add more subscriptions as needed
        ];

        DB::table('user_subscriptions')->insert($subscriptions);
    }
}
