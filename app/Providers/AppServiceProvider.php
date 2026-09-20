<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Http\Client\Response as ClientResponse;

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
        Gate::define('view-admin', function (User $user) {
            // if ($user->id == 1) {
            //     return ClientResponse::allow();
            // }
            // return Response::denyAsNotFound();

            return $user->isAdmin() ? Response::allow() : Response::denyAsNotFound();
        });
    }
}
