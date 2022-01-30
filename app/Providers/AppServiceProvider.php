<?php

namespace App\Providers;

use App\Models\general\Language;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

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
        Schema::defaultStringLength(191);

        view()->composer('*', function ($view)
        {


            //...with this variable
            $view->with([
//                'setting' => Setting::query()->first(),
                'locales'=> Language::all(),
//                'admin'=>Admin::first(),
//                'contact'=> Contact::where('read',0)->count(),
//                'count_orders'=> Order::count(),
//                'count_categories'=> 5,
                //  'users_count'=>User::count(),

            ]);
        });


    }
}


