<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        \Illuminate\Support\Facades\View::composer('*', function($view){
            $setting = \App\Models\SiteSetting::first();
            $view->with('siteSettings', $setting);
            $view->with('currencyCode', optional($setting)->currency_code ?? 'USD');
            $view->with('currencySymbol', optional($setting)->currency_symbol ?? '$');
            $view->with('phoneCountryCode', optional($setting)->phone_country_code ?? null);
            $view->with('phoneNumber', optional($setting)->phone_number ?? null);
            $view->with('socialLinks', optional($setting)->social_links ?? []);
        });
    }
}
