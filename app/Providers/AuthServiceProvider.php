<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\User;
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

        Gate::define('admin', function(User $user){
            return $user->hasRole('admin');
        });
        Gate::define('consultant', function(User $user){
            return $user->hasRole('consultant');
        });
        Gate::define('superadmin', function(User $user){
            return $user->hasRole('superadmin');
    });
    
        //Gate::before(function (User $user) {
        //    if ($user->hasRole('SuperAdmin')) {
        //        return true;
        //    }
        //    return null;
        //});
    }
}
