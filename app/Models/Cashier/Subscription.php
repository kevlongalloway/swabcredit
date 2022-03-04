<?php

namespace App\Models\Cashier;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Cashier\Subscription as CashierSubscription;

class Subscription extends CashierSubscription
{
    use HasFactory;

    protected $service;

    protected $plan;

    protected $table = 'subscriptions';

    protected $fillable = [
        'name',
        'stripe_id',
    ];
}
