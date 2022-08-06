<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Cate;

class FrontendServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */

    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('frontend.html.my-header', 'App\Http\View\Composers\Frontend\CateComposer');
        $cates = Cate::select()->get();
        View::share('cates', $cates);
        //View::share('cates', $categories);
    }
}
