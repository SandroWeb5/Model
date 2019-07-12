<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('eAdmin', function ($user) {
            return $user->perm == 'Admin' && $user->status == 'S';
        });
        Gate::define('eGerent', function ($user) {
            return $user->perm == 'Gerente' && $user->status == 'S';
        });
        Gate::define('eSuport', function ($user) {
            return $user->perm == 'User' && $user->status == 'S';
        });
        Gate::define('eAdmger', function ($user) {
            return $user->perm == 'Admin' || $user->perm == 'Gerente' && $user->status == 'S';
        });
        Gate::define('eGeral', function ($user) {
            return $user->perm == 'Admin' || $user->perm == 'Gerente' || $user->perm == 'User' && $user->status == 'S';
        });
    }
}
