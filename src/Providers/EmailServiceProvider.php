<?php

namespace Dan\Email\Providers;

use Illuminate\Support\ServiceProvider;

class EmailServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        if (! $this->app->routesAreCached()) {
            require __DIR__ . '/../Http/routes.php';
        }

        $this->loadViewsFrom(__DIR__.'/../../../../resources/views', 'email');

        $this->publishes([
            __DIR__.'/../../../../config/email.php' => config_path('email.php')
        ], 'config');

        $this->publishes([
            __DIR__.'/../../../../database/migrations/' => database_path('migrations')
        ], 'migrations');

        $this->publishes([
            __DIR__.'/../../../../resources/views/' => base_path('resources/views/vendor/email'),
        ], 'views');

        $this->publishes([
            __DIR__.'/../../../../public/' => base_path('public'),
        ], 'assets');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
