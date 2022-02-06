<?php

namespace App\Providers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;
use App\Models\Year;

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
        App::setLocale('fr');

        // A new deployment will have no year
        // Use user_working_contexts table
        // $working_year = Year::latest()->first();
        // if ($working_year) {
        //     session(['working_year' => $working_year->id]);
        // }
    }
}
