<?php

namespace App\Http\Controllers;

use App\Models\SubscriptionPlan;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function subscription() {
        $plans=SubscriptionPlan::where('enabled',1)
            ->get();
        $result=compact('plans');
        return view('subscription')->with($result);
    }

}
