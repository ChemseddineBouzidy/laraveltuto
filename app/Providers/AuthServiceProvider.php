<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\Profile;
use App\Models\Publication;
use App\Policies\publicationPolicy;
use Illuminate\Auth\GenericUser;
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
        // methode 1 =>
        'App\Models\Publication' => 'App\Policies\publicationPolicy',
          // methode 2 =>
        Publication::class =>publicationPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // Gate::define('update-publication', function (GenericUser  $profile,Publication $publication){
        //     // return $profile->isAdmin;
        //     return $profile->id == $publication->profile_id;

        // }) ;
        
    }
}
