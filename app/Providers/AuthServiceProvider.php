<?php

namespace App\Providers;

use App\Operat;
use App\Policies\OperatPolicy;
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
        // 'App\Model' => 'App\Policies\ModelPolicy',
        'App\Model' => 'App\Policies\ModelPolicy',
    Operat::class => OperatPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
     
    Gate::define('update-operat', function ($user, $operat) {
    return $user->id == $operat->user_id;
    });
    }
}
