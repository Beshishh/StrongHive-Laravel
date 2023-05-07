<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define ('isAdmin', function($users){
            return $users->role == 'admin';
        });

        Gate::define ('isManager', function($users){
            return $users->role == 'manager';
        });

        Gate::define ('isClient', function($users){
            return $users->role == 'client';
        });
    }
}
