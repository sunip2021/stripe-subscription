<?php

namespace Database\Seeders;

use App\Models\SubscriptionPlan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
class SubscriptionPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentDateTime=Carbon::now()->format('Y-m-d H:i:s');
        SubscriptionPlan::create([
            "name"=>"Monthly",
            "stripe_price_id"=>"price_1ShvFnFOi3W0WLZmuG0H988B",
            "trial-days"=>5,
            "amount"=>12,
            "type"=>0,
            "enabled"=>1,
            "created_at"=>$currentDateTime,
            "updated_at"=>$currentDateTime
        ]);
         SubscriptionPlan::create([
            "name"=>"Yearly",
            "stripe_price_id"=>"price_1ShvIQFOi3W0WLZm86JXnsiO",
            "trial-days"=>5,
            "amount"=>100,
            "type"=>1,
            "enabled"=>1,
            "created_at"=>$currentDateTime,
            "updated_at"=>$currentDateTime
        ]);
         SubscriptionPlan::create([
            "name"=>"Lifetime",
            "stripe_price_id"=>"price_1ShvSMFOi3W0WLZmVNXUEp5P",
            "trial-days"=>5,
            "amount"=>400,
            "type"=>2,
            "enabled"=>1,
            "created_at"=>$currentDateTime,
            "updated_at"=>$currentDateTime
        ]);
    }
}
