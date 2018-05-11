<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

use App\Models\Manufacturer;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \Schema::defaultStringLength(191);
        if (\Schema::hasTable('categories') && \Schema::hasTable('manufacturers')) {
            $categories = Category::with('subcate')->where('parent_id', null)->get();
            $manufacturers = Manufacturer::all();
            view()->share(['categories' => $categories,'manufacturers' => $manufacturers]);
        }

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
