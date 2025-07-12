<?php

namespace App\Providers;
use App\Models\User;
use Illuminate\Support\Facades\Gate;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('Administrateur', function (User $user) {
            return $user->type === 'Administrateur';
        });
    
        Gate::define('Gestionnaire', function (User $user) {
            return $user->type === 'Gestionnaire';
        });

        Gate::define('Gérant', function (User $user) {
            return $user->type === 'Gérant';
        });

        Gate::define('edition', function (User $user) {
            return $user->type === 'edition';
        });
    }
}
