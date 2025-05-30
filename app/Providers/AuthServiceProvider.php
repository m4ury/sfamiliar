<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('ver-patologias', function ($user) {
            if ($user->type == 'admin') {
                return true;
            }
            return false;
        });

        Gate::define('estadisticas', function ($user) {
            if ($user->type == 'admin' || $user->type == 'enfermera') {
                return true;
            }
            return false;
        });

        Gate::define('controles-all', function ($user) {
            if ($user->type == 'admin' || $user->type == 'medico') {
                return true;
            }
            return false;
        });
    }
}
