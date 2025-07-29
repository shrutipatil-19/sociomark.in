<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use App\Models\User;
use Illuminate\Support\ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        Gate::define('admin-access', function ($user) {
            return $user->role === 'admin';
        });

        Gate::define('all-access', function ($user) {
            return in_array($user->role, ['hr', 'admin', 'business', 'user']);
        });

        Gate::define('hr-access', function ($user) {
            return in_array($user->role, ['hr', 'admin']);
        });

        Gate::define('business-access', function ($user) {
            return in_array($user->role, ['business', 'admin']);
        });

        Gate::define('user-access', function ($user) {
            return in_array($user->role, ['user', 'admin']);
        });

        // NEW: Only allow users to edit their own profile
        // Gate::define('edit-own-profile', function (User $user, $profileId) {
        //     return $user->id === (int) $profileId;
        // });

        // in controller use this after define methode - to access method
        // $this->authorize('edit-own-profile', $id);

        // in blade use this - to access the view 
        // @can('edit-own-profile', $user->id)
        //     <a href="{{ route('edit-user', $user->id) }}">Edit Profile</a>
        // @endcan

    }
}
