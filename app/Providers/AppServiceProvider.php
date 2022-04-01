<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Blade;
use Laravel\Cashier\Cashier;
use App\Models\Cashier\Subscription;
use App\Models\Cashier\SubscriptionItem;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultstringLength(191);


        Blade::if('admin', function () {
            return Auth::check() ? Auth::user()->isAdmin() : false;
        });

        Cashier::calculateTaxes();
        Cashier::ignoreMigrations();
        Cashier::useSubscriptionModel(Subscription::class);
        Cashier::useSubscriptionItemModel(SubscriptionItem::class);
    }
}
