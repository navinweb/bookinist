<?php

namespace App\Providers;

use App\Post;
use App\Tag;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Billing\Stripe;
use Psy\Util\Str;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        view()->composer('partials.sidebar', function($view) {
            $archives = Post::archives();
            $tags = Tag::has('posts')->pluck('name');

            $view->with(compact(['archives', 'tags']));
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //TEST DI, SERVICE CONTAINER, Service Providers
        $this->app->singleton(Stripe::class, function(){
            return new Stripe(config('services.stripe.secret'));
        });
    }
}
