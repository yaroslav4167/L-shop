<?php

namespace App\Providers;

use App\Contracts\Distributor;
use App\Exceptions\DistributorNotFoundException;
use App\Exceptions\UnexpectedSettingsValueException;
use Illuminate\Support\ServiceProvider;

/**
 * Class DistributorServiceProvider
 *
 * @author D3lph1 <d3lph1.contact@gmail.com>
 *
 * @package App\Providers
 */
class DistributorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('distributor', function () {
                $distributor = s_get('distributor.name');
                $full = "App\\Services\\Distributors\\$distributor";
                if (class_exists($full)) {
                    return new $full($this->app->make('qm'));
                }

                throw new DistributorNotFoundException($distributor);
            });
    }
}
