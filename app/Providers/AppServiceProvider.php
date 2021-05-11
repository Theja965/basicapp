<?php
namespace App\Providers;
use App\Models\Page;
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
        view()->share('public_pages', Page::all());
        view()->share('copyright', "Copyright April 2021 Behar Theja Thondapi");
    }
}

