<?php

namespace App\Providers;

use App\Actions\Jetstream\DeleteUser;
use Illuminate\Support\ServiceProvider;
use Laravel\Jetstream\Jetstream;
use Illuminate\Support\Facades\Blade;
use App\View\Components\HomeLayout;
use App\View\Components\AdminCustomers;
use App\View\Components\Landing\ContactInfo;
use App\View\Components\Landing\Contact;
use App\View\Components\Landing\Services;
use App\View\Components\Landing\Info;
use App\View\Components\Landing\LandingHeader;
use App\View\Components\Landing\Navbar;
use App\View\Components\Landing\Footer;
use App\View\Components\Landing\Timeline;
use App\View\Components\Landing\About;


class JetstreamServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Jetstream::ignoreRoutes();
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->configurePermissions();

        Jetstream::deleteUsersUsing(DeleteUser::class);
        Blade::component('home-layout', HomeLayout::class);
        Blade::component('contact-info', ContactInfo::class);
        Blade::component('contact', Contact::class);
        Blade::component('services', Services::class);
        Blade::component('info', Info::class);
        Blade::component('landing-header', LandingHeader::class);
        Blade::component('navbar', Navbar::class);
        Blade::component('footer', Footer::class);
        Blade::component('admin-customers', AdminCustomers::class);
        Blade::component('timeline', Timeline::class);
        Blade::component('about', About::class);
    }

    /**
     * Configure the permissions that are available within the application.
     *
     * @return void
     */
    protected function configurePermissions()
    {
        Jetstream::defaultApiTokenPermissions(['read']);

        Jetstream::permissions([
            'create',
            'read',
            'update',
            'delete',
        ]);
    }
}
