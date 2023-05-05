<?php

namespace App\Providers;
use Illuminate\Support\Facades\View;
use App\Models\AppUser;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }
    public function boot(): void
    {
        View::composer(['homepage-green', 'transactionPage'], function($view) {
            $currentuser = AppUser::find(2);
            $view->with('appuser', $currentuser);
        });

        View::composer(['homepage-gold', 'transactionPage'], function($view) {
            $currentuser = AppUser::find(1);
            $view->with('appuser', $currentuser);
        });
    }
}
